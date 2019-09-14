<meta charset = "utf-8">
<?php
 session_start();
 $pwd_admin = $_POST["password_admin"];
 if($pwd_admin=="thiscase") {
 	$_SESSION['state'] = 'admin';
 } else {
 	echo "<script>alert('관리자가 아닙니다!');history.go(-1);</script>";
 	exit;
 }
?>
<meta http-equiv = "refresh" content="0,url=index.php">