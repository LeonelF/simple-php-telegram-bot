<?php

class Help extends Bot 
{
	public function __construct($conf, $chat_id)
	{
		parent::__construct($conf, $chat_id);
	}

	public function help()
	{
		$message = "<b>General Help</b>" . chr(10) . chr(10);
		$message .= "<b>/help server</b>" . chr(10) . "  - List the server related commands";

		return $this->send($message);
	}

	public function server()
	{
		$message = "<b>Server related commands</b>" . chr(10) . chr(10);
		$message .= "<b>/server uptime</b>" . chr(10) . "  - Retrieves the uptime of the server (alias /uptime)" . chr(10) . chr(10);
		$message .= "<b>/server uname</b>" . chr(10) . "  - Retrieves the server name, build and kernel (alias /uname)" . chr(10) . chr(10);
		$message .= "<b>/server who</b>" . chr(10) . "  - Retrieves the current sessions on the server (alias /who)" . chr(10) . chr(10);
		$message .= "<b>/server disk</b>" . chr(10) . " - Retrieves the disk information like space used/available (alias /disk)";

		return $this->send($message);
	}
}