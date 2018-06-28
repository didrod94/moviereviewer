<?php 

$user= (isset($_SESSION['user_role'])) ? $_SESSION['user_role'] : null;

?>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../mainpage/mainpage.php"><span style="color:chartreuse">M</span>ovie <span style="color:chartreuse">R</span>eviewer</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../mainpage/mainpage.php">홈</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../allReview.php">리뷰게시판</a>
              <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../mypage/index.php">마이페이지</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../includes/logout.php">로그아웃</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

