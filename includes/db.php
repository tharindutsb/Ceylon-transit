<?php

$connection = mysqli_connect("localhost:3308",'root','','bus');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>