<?php
 session_start();
 echo "<script>alert('정상적으로 로그아웃 되셨습니다!');</script>";
 session_destroy();
?>
<meta charset = "utf-8">
<meta http-equiv="refresh" content="0,url=index.php">