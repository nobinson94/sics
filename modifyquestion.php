<?php
    session_start();
    $connect=mysql_connect('localhost', 'hackathon', 'yt20150705');
    mysql_select_db("hackathon");
    mysql_query("set names utf8");

    $num = $_GET['num'];
    $result = mysql_query("select * from BOARD where num = '$num'", $connect);
    $row = mysql_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>연세대학교 창업열정대회</title>
   <style>
    @media only screen and (min-device-width: 768px) and (max-width:1024px){
        .container{style="width: 100%;}
    }
    @media handheld and (max-width:480px), screen and (max-width:480px), screen and (max-device-width:480px){
        .container{style="width: 100%;}
    }
    .container{style="width: 50%;}
    </style>
     <script>
        function check_pass()
        {
            var x = document.getElementById("pwd").value;
 
            if (/^\d{4}$/.test(x)==1)
               document.getElementById("passcheck").innerHTML = "4자리 확인되었습니다." 

        }
         function check_all()
         {
         var x = document.getElementById("pwd").value;
           var y = document.getElementById("title").value;
            var z = document.getElementById("content").value;
           if(/^\d{4}$/.test(x)==1&&y&&z)
           document.getElementById("mysubmit").disabled = false;
           else
           document.getElementById("mysubmit").disabled = true;
         }
    </script>

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
                        <a class="page-scroll" href="#schedule">대회일정</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#introduction">경연안내</a>
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
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h1 class="section-heading">질문 수정하기</h1>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container" >
                <form role="form" class="form-horizontal" action="modifiedquestionpost.php" method="post">
                    <div class="form-group" style="text-align: left;">
                        <label for="pwd" class="control-label col-sm-2" >질문 제목: </label>
                        <div class="col-sm-10"><input name="title"  type="text" class="form-control" id="title">
                        <?php echo $row['title'];?></div>
                    </div>
                    <div class="form-group" style="text-align: left;">
                        <label for="pwd" class="control-label col-sm-2">질문 내용: </label>
                        <div class="col-sm-10">
                        <textarea name="content" class="form-control" rows="10"  id="content">
                             <?php echo $row['content']; ?>    
                        </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-xl page-scroll" id="mysubmit" disabled>제출하기</button>
                </form>
            </div>
        </div>
    </header>
</body>