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
				$i++;
				$output .= "#" . $i . " " . $line . chr(10);
			}			
		}

		return $this->send($output);
	}

}
