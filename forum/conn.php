<?php
session_start();
$db_username = 'vlabcomp';
$db_password = 'B9HSl2ErTj$$';
$conn = new PDO( 'mysql:host=localhost;dbname=vlabcomp_forum', $db_username, $db_password );
if(!$conn){
die("Fatal Error: Connection Failed!");
}

?>