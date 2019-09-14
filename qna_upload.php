<?php
$username="hackathon";
$password="yt20150705";
$database="hackathon";

$pass=$_POST['pass'];
$title=$_POST['title'];
$content=$_POST['content'];
$wdate=$_POST['wdate'];


@ $connection = mysql_connect('localhost', 'hackathon', 'yt20150705');

if (!$connection) {  die('Not connected : ' . mysql_error());}

mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

$query = "INSERT INTO members (pass,title,content,wdate,view)
VALUES ('".$pass."','".$title."','".$content."', '".$wdate."','0')";
$result = mysql_query($query);
?>
<meta http-equiv='refresh' content='0;url=login_.php'>