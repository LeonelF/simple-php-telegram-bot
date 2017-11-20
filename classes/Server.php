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
			return $this->send("Filesystem: " . $parsed[1] . " | Size: " . $parsed[2] . " | Used: " . $parsed[3] . " | Available: " . $parsed[4] . " | Used %: " . $parsed[5]);
		}
		else {
			return $this->send("Error, executing the requested command.");
		}
	}

}
