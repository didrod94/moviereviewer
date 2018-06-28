<!DOCTYPE html >
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />	
		<meta charset="utf-8">
		<title><span style="color:chartreuse">MOVIE REVIEWER</title>
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Syncopate|Roboto" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/backstretch.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/prefixfree.min.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
		
		<link rel="stylesheet" href="css/style.css" />	
		<link rel="stylesheet" href="font/font.css" />
		
		<script type="text/javascript" src="js/custom.js"></script>
	</head>
	
	<body>
		<div id="window1" class="window">
			<div class="bg"></div>
			<ul id="all">
				<li><a href='../mypage/index.php'><i class="fa fa-user" aria-hidden="true"></i></a></li>
				<li><a href='../allReview.php'><i class="fa fa-list" aria-hidden="true"></i></a></li>
				<li><a href="../add_review.php"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
				<li><a href="../includes/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
			<header>
				<div class="box1">
                    <p class="title"><span style="color:chartreuse">M</span>ovie <span style="color:chartreuse">R</span>eviewer</p>
				</div>
			</header>
			
			<figure class="vid">
				<video loop autoplay>
					<source src="img/background.mp4" type="video/mp4"/>
				</video>
			</figure>
			
			<section class="icon">
				<img src="img/icon1.png" class="icon1">
			</section>
			<div class="review">
				<p class="rev">about us</p>
			</div>
			
			<nav class="pages">
				<ul>
					<li>
						<a href="#">ACTION</a>
						<div>
							<h1>ACTION</h1>
							<p><img src="img/action.jpg"/></p>
							<ul>
								<li><a href='action1.php'>범죄도시</a></li>
								<li><a href='action2.php'>저스티스 리그</a></li>
								<li><a href='action3.php'>키드냅</a></li>
								<li><a href='action4.php'>토르:라그나로크</a></li>
							</ul>
							</div>
							</li>
							<li>
							<a href="#">ROMANCE</a>
							<div>
							<h1>ROMANCE</h1>
							<p><img src="img/romance.jpg"/></p>
							<ul>
							<li><a href='romance1.php'>뉴니스</a></li>
							<li><a href='romance2.php'>메소드</a></li>
							<li><a href='romance3.php'>벤자민 버튼의 시간은 거꾸로 간다</a></li>
							<li><a href='romance4.php'>이프 온리</a></li>
							</ul>
							</div>
							</li>
							<li>
							<a href="#">DRAMA</a>
							<div>
							<h1>DRAMA</h1>
							<p><img src="img/drama.jpg"/></p>
							<ul>
							<li><a href='drama1.php'>고령가 소년 살인사건</a></li>
							<li><a href='drama2.php'>너의 췌장을 먹고 싶어</a></li>
							<li><a href='drama3.php'>버킷 리스트</a></li>
							<li><a href='drama4.php'>침묵</a></li>
							</ul>
							</div>
							</li>
							<li>
							<a href="#">ANIMATION</a>
							<div>
							<h1>ANIMATION</h1>
							<p><img src="img/animation.jpg"/></p>
							<ul>
							<li><a href='animation1.php'>넛잡 2</a></li>
							<li><a href='animation2.php'>더 크리스마스</a></li>
							<li><a href='animation3.php'>러빙 빈센트</a></li>
							<li><a href='animation4.php'>몬스터 패밀리</a></li>
							</ul>
							</div>
							</li>
							<li>
							<a href="#">CRIME</a>
							<div>
							<h1>CRIME</h1>
							<p><img src="img/crime.jpg"/></p>
							<ul>
							<li><a href='crime1.php'>꾼</a></li>
							<li><a href='crime2.php'>미옥</a></li>
							<li><a href='crime3.php'>스노우맨</a></li>
							<li><a href='crime4.php'>프리 파이어</a></li>
							</ul>
							</div>
							</li>
							<li>
							<a href="#">MYSTERY</a>
							<div>
							<h1>MYSTERY</h1>
							<p><img src="img/mystery.jpg"/></p>
							<ul>
							<li><a href='mystery1.php'>기억의 밤</a></li>
							<li><a href='mystery2.php'>오리엔트 특급 살인</a></li>
							<li><a href='mystery3.php'>유리정원</a></li>
							<li><a href='mystery4.php'>해피 데스데이</a></li>
							</ul>
							</div>
							</li>
							</ul>
							</nav>
							</div>
							
							<div id="window2" class="window">
							<ul id="gototop">
							<li><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
							</ul>
							<section class="intro">
							<p class="text3">"Movie Reviewer"는 영화를 사랑하는 사람들의 공간입니다.
							<br><br>마이페이지에서 영화의 리뷰를 남겨주세요.
							<br><br>리뷰게시판에서는 다른 사용자들과 리뷰를 공유할 수 있습니다.
							<br><br>"Movie Reviewer"는 함께 만들어가는 공간입니다.
							</p>
							</section>
							<section class="line"></section>
							<section class="copyright">
							<p class="text4">Copyright ⓒ 2017 MOVIE REVIEWER All Rights Reserved.</p>
							</section>
							</div>
							
							
							</body>
							</html>																												