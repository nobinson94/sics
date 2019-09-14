<?php
$username="hackathon";
$password="yt20150705";
$database="hackathon";

@ $connection = mysql_connect('localhost', 'hackathon', 'yt20150705');

//$username="hackathon";
//$password="yt20150705";
//$database="hackathon";

//@ $connection = mysql_connect('localhost', 'hackathon', 'yt20150705');
$num = $_GET['num'];

if (!$connection) {  die('Not connected : ' . mysql_error());}

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

$query ="delete from BOARD where num='$num'";
mysql_query($query);


?>
<meta http-equiv='refresh' content='0,url=qna.php'>