<?php
$username="hackathon";
$password="yt20150705";
$database="hackathon";

@ $connection = mysql_connect('localhost', 'hackathon', 'yt20150705');

//$username="hackathon";
//$password="yt20150705";
//$database="hackathon";

//@ $connection = mysql_connect('localhost', 'hackathon', 'yt20150705');

if (!$connection) {  die('Not connected : ' . mysql_error());}

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

$sql ="CREATE TABLE BOARD
(
num int(11) NOT NULL auto_increment,
pass int(4) NOT NULL,
title varchar(12) NOT NULL,
content text NOT NULL,
wdate datetime NOT NULL,
view int(11) NOT NULL DEFAULT 0,
PRIMARY KEY (num)
)";
mysql_query($sql);
?>