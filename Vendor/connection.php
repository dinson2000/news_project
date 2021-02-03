<?php

$conn = mysqli_connect("localhost","root","","news_project");
if ($conn -> connect_error)
		{                                    
			die("Connection Failed:".$conn -> connect_error);	
		}

?>

