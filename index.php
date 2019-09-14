
<!DOCTYPE html>
<html lang="en"  >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <style>
    @media only screen and (min-device-width: 768px) and (max-width:1024px){
    .item{margin:auto;width:100%;height:500px;}
    .carousel-inner > .item > img {height:500px;}
    }
    @media handheld and (max-width:480px), screen and (max-width:480px), screen and (max-device-width:480px){
    .item{margin:auto;width:100%; height:500px;}
        .carousel-inner > .item > img {height:500px;}
    }
    .item{margin:auto;width:100%;}
    </style>
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

<body id="page-top" >

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">연세대학교 창업열정대회</a>
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
                <h1>제 1 회 연세대학교 창업열정대회</h1>
                <hr>
                <p>여러분의 무한한 가능성과 창업에 대한 열정을 평가합니다. 지금 도전하세요!</p>
                <a href="창의열정대회참가신청서.docx" class="btn btn-primary btn-xl page-scroll" download>지원서 내려받기</a>
                <br><br>
                <h3>참가 자격</h3>
                <hr>
                <p>컴퓨터과학과 학부 및 대학원 재학생, 휴학생, 졸업생 및 이중/복수전공생 1인을 포함한 팀<br>
                    컴퓨터과학과 팀원이 없는 경우, 컴퓨터과학과 팀원 매칭 가능.<p>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="benefit">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">수상팀 지원 혜택</h2>
                    <hr class="light">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-map-marker wow bounceIn"></i>
                        <h3>교내 창업공간 제공</h3>
                        <p class="text-faded">공학원에 약 5평정도의 창업공간을 제공</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-university wow bounceIn" data-wow-delay=".1s"></i>
                        <h3>쿼드러플 멘토링</h3>
                        <p class="text-faded">기존의 한명의 멘토에 여러 멘티팀이 매칭되는 시스템을 벗어나, 한팀의 멘티팀에 4명의 멘토단을 매칭</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-money wow bounceIn" data-wow-delay=".2s"></i>
                        <h3>사업비 지원</h3>
                        <p class="text-faded">최대 1,000만원까지 창업에 필요한 사업비를 제공</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn" data-wow-delay=".3s"></i>
                        <h3>투자 지원자금 유치 지원</h3>
                        <p class="text-faded">팀 구성, 사업계획 등을 토대로 투자금 유치에 도움</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/piki.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    지금까지 볼 수 없었던 역대급 후원사
                                </div>
                                <div class="project-category text-faded">
                                    스타트업 신화의 수많은 기업들과 재단들이 후원합니다.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/naver.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    최고의 멘토들과 심사위원단과의 네트워크
                                </div>
                                <div class="project-category text-faded">
                                    다음카카오, 네이버, 옐로모바일, 피키캐스트의 <br>창업자들과 현직 임원들을 만나볼 수 있습니다.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>-->
    <section id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">대회 일정</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paperclip wow bounceIn text-primary"></i>
                        <h3>서류 접수</h3>
                        <p class="text-muted">7월 22일 수요일까지</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-comment wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>1차 인터뷰</h3>
                        <p class="text-muted">7월 25일 토요일 (예정)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>오리엔테이션</h3>
                        <p class="text-muted">7월 25일 토요일 (예정)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-trophy wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>2차 경연</h3>
                        <p class="text-muted">8월 22일 토요일 </p><p class="text-muted">오전 9시 ~ 오후 9시</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id = "introduction">
        <div id="carousel" class="carousel slide no-padding" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/carousel.jpg" style="width:100%" >
                    <div class="carousel-caption">
                        <h2 class="section-heading">서류 접수</h2>
                        <hr class="light">

                        <h4>- 팀사진을 포함한 팀소개 (1page)</h4>
                        <h4>- 창업동기 (지원동기) (1page)</h4>
                        <h4>- 창업아이템에 대한 소개 (1page)</h4>
                        <br>
                        <h4>세 가지 내용이 담긴 지원서를 내려받아 작성해 메일로 접수.</h4>
                        <h4>메일 주소: <a href="mailto:yonseisics@gmail.com" style="text-decoration: none; color:white;">yonseisics@gmail.com</a></h4>

                    </div>
                </div>

                <div class="item">
                    <img src="img/carousel.jpg" style="width:100%">
                    <div class="carousel-caption">
                        <h2 class="section-heading">1차 인터뷰 & OT</h2>
                        <hr class="light">
                        <h4>- 일 시 : 7월 25일(토) - 시간 미정</h4>
                        <h4>- 장 소 : 연세대학교 신촌캠퍼스   </h4>
                        <h4>- 참가 대상 : 서류전형을 통과한 팀의 1인 이상의 팀원.</h4>
                    </div>
                </div>

                <div class="item">
                    <img src="img/carousel.jpg" style="width:100%">
                    <div class="carousel-caption" >
                        <h2 class="section-heading">2차 경연</h2>
                        <hr class="light">
                        <h4>- 일 시 : 8월 22일(토) 오전 9시 ~ 오후 9시</h4>
                        <h4>- 장 소 : 연세대학교 신촌캠퍼스 </h4>
                        <h4>- 전형 방법 : 
                        <h4>사업에 대한 PT 및 질의응답 (40%)</h4>
                        <h4>Communication, Cooperation, Leadership 등 (60%)</h4>
                        <br><br><br><br>
                    </div>
                </div>
             </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>
   
 
     <section id ="sponsor">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center" style=" margin:auto;width:100%;">
                    <h2 class="section-heading">후원사</h2>
                    <hr class="primary">
                    <img src="img/sponsor.jpg" style=" margin:auto; width:100%;">
                </div>
            </div>
        </div>
        <div class="container">
            
        </div>
    </section>

    <section id="contact" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <hr class="primary">
                </div>

                <div class="col-lg-8 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <br>
                    <p><a href="mailto:yonseisics@gmail.com" style="text-decoration: none;">yonseisics@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
