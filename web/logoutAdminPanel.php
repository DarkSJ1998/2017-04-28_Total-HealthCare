<?php
	session_start();

	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: /web"); // Redirecting to Home Page
	}

?>