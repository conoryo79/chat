<?php

$host="localhost";
$user="conor";
$pass="conor";
$db_name="chat";

$con = new mysqli($host,$user,$pass,$db_name);

function formatDate($date){
	return date('g:i a', strtotime($date));
}

 ?>
