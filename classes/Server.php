<?php

class Server extends Bot
{
	public function __construct($conf, $chat_id)
	{
		parent::__construct($conf, $chat_id);
	}

	public function uptime()
	{
		return $this->send("Server uptime:". exec('uptime'));
	}

	public function uname()
	{
		return $this->send(exec('uname -a'));
	}

	public function who()
	{
		exec('who', $serverwho);

		$output = "No active sessions on server at the moment.";

		if (count($serverwho) > 0) {
			$output = "Current sessions on server:" . chr(10);
			foreach ($serverwho as $line) {
				$output .= "#" . ++$i . " " . $line . chr(10);
			}			
		}

		return $this->send($output);
	}

	public function disk()
	{
		exec('df -hT /home', $serverspace);
		if (count($serverspace) > 0) {
			$parsed = array_values(array_filter(explode(" ",$serverspace[1])));
			return $this->send("<b>Filesystem</b>: " . $parsed[1] . chr(10) . "<b>Size</b>: " . $parsed[2] . chr(10) . "<b>Used</b>: " . $parsed[3] . " (" . $parsed[5] .")" . chr(10) . "<b>Available</b>: " . $parsed[4]);
		}
		else {
			return $this->send("Error executing the requested command.");
		}
	}

}
