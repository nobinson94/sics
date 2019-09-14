<?php
$pass=$_POST['pass'];
$title=$_POST['title'];
$content=$_POST['content'];
$wdate=date("Y-m-d H:i:s");

@ $connection = mysql_connect('localhost', 'hackathon', 'yt20150705');
mysql_query("set names utf8");
mysql_select_db("hackathon");

$query = "insert into BOARD(pass,title,content,wdate,view)
values('".$pass."','".$title."','".$content."', '".$wdate."', '0')";
$result = mysql_query($query);
?>
<meta http-equiv='refresh' content='0;url=qna.php'>