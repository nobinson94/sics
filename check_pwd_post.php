<meta charset = "utf-8">
<?php
    session_start();
    $connect=mysql_connect('localhost', 'hackathon', 'yt20150705');
    mysql_select_db("hackathon");
    mysql_query("set names utf8");

    $num = $_GET['num'];
    $task = $_GET['task'];
    $password = $_POST['pass'];


    $result = mysql_query("select * from BOARD where num = '$num'", $connect);
    $row = mysql_fetch_array($result);
    
    if($row[1] == $password) {
        if($task =='delete') echo "<meta http-equiv='refresh' content='0,url=deletequestion.php?num=".$num."'>";
        else if($task =='modify') echo "<meta http-equiv='refresh' content='0,url=modifyquestion.php?num=".$num."'>";


    } else {
 		echo "<script>alert('비밀번호가 틀렸습니다!');history.go(-1);</script>";
    }
?>
