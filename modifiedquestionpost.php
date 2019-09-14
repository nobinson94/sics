<meta charset = "utf-8">
<?php
$connect=mysql_connect('localhost', 'hackathon', 'yt20150705');
 mysql_select_db("hackathon");
 mysql_query("set names utf8");

 $content = $_POST["content"];
 $num = $_GET['num'];
 $view = $_GET['view'];
 mysql_query("update BOARD set answer='$answer' where num=$num");

 echo "<meta http-equiv='refresh' content='0;url=questioncontent.php?num=".$num."&view=".$view.".php'>";

?>