<?php
$content=$_POST['content'];
$title=$_POST['title'];
$wdate=date("Y-m-d H:i:s");

@ $connection = mysql_connect('localhost', 'hackathon', 'yt20150705');
mysql_query("set names utf8");
mysql_select_db("hackathon");

$query = "insert into GONGJI(title,content,wdate,view)
values('".$title."','".$content."', '".$wdate."', '0')";
$result = mysql_query($query);
?>
<meta http-equiv='refresh' content='0;url=notice.php'>