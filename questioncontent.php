<?php
    session_start();
    $connect=mysql_connect('localhost', 'hackathon', 'yt20150705');
    mysql_select_db("hackathon");
    mysql_query("set names utf8");

    $num = $_GET['num'];
    $view = $_GET['view']+1;
    mysql_query("update BOARD set view='$view' where num='$num'");
    $result = mysql_query("select * from BOARD where num = '$num'", $connect);
    $row = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    @media only screen and (min-device-width: 768px) and (max-width:1024px){
        .container{style="width: 100%;}
    }
    @media handheld and (max-width:480px), screen and (max-width:480px), screen and (max-device-width:480px){
        .container{style="width: 100%;}
    }
    .container{style="width: 50%;}
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>연세대학교 창업열정대회</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="SHORTCUT ICON" href="favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand page-scroll" href="index.php">연세대학교 창업열정대회</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        session_start();
                        if(isset($_SESSION['state'])) {
                            echo '<li><a class="page-scroll" href="#">관리자</a></li>';
                            echo '<li><a class="page-scroll" href="adminlogout.php">로그아웃</a></li>';
                        }
                    ?>
                    <li>
                        <a class="page-scroll" href="notice.php">공지사항</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="qna.php">Q & A</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#schedule">대회일정</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#introduction">경연안내</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Q & A</h1>
                <hr>
            </div>
            <div class="container" >
                <div class="row" style="border-bottom: 2px white solid; border-top: 2px white solid;">
                    <div class="col-md-3"><h4><?php echo $row[0];?></h4></div>
                    <div class="col-md-9 text-primary"><h4><?php echo $row[2];?></h4></div>
                </div>
                <div class="row" style="border-bottom: 1px white solid;">
                    <div class="col-md-8"></div>
                    <div class="col-md-2"><h5>조회수</h5></div>
                    <div class="col-md-2"><h5><?php echo $row[5];?></h5></div>
                </div>
                <div class="row" style="padding-top: 10px;">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="text-align: left;"><?php echo nl2br($row[3]); ?></div>
                    <div class="col-md-1"></div>   
                </div>
                <div class="row" style="margin-top: 30px; border-bottom: 2px white solid; border-top: 2px white solid;" >
                   <div class="col-md-12 text-primary"><h4>답변</h4></div>  
                </div>
                <div class="row" >
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="text-align: left; padding-top: 20px;">
                        <?php
                            echo nl2br($row[6]);
                        ?>
                    </div>
                    <div class="col-md-1"></div>   
                </div>
                <div class="row" style="padding-top: 20px;">
                    <?php echo '<a href="check_pwd.php?task=delete&num='.$row[0].'" class="btn btn-primary btn-xl page-scroll">질문 삭제하기</a>';?>
                    <?php echo '<a href="check_pwd.php?task=modify&num='.$row[0].'" class="btn btn-primary btn-xl page-scroll">질문 수정하기</a>';?>
                </div>

                <div class="row" style="padding-top: 20px;">
                <?php
                  $result = mysql_query("select * from BOARD where num = $num", $connect);
                  $row = mysql_fetch_array($result);
                    if(isset($_SESSION['state'])&& !$row[6])  echo'<a href="answer.php?num='.$row[0].'&view='.$row[5].'" class="btn btn-primary btn-xl page-scroll">답변하기</a>';
                    else if(isset($_SESSION['state'])&& $row[6]) echo'<a href="answer.php?num='.$row[0].'&view='.$row[5].'" class="btn btn-primary btn-xl page-scroll">답변 수정하기</a>';
                ?>
                </div>

            </div>
  