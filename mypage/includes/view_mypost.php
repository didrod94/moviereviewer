<?php 
    ob_start(); //buffering header in scripts
    include_once "../../includes/dbconnect.php"; 
    include_once "ad_functions.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Reviewer - My Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/shop-item.css" rel="stylesheet">
    
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery/jquery.twbsPagination.js"></script>
    <script src="../vendor/jquery/jquery.twbsPagination.min.js"></script>
    
</head>

<body>
    <!-- Navigation -->
    <?php include "my_navigation.php"; ?>
    <!-- /.navbar-collapse -->
    
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">마이페이지</h1>
          <div class="list-group">
            <a href="../index.php" class="list-group-item">회원 정보 관리</a>
            <a href="view_mypost.php" class="list-group-item active" >나의 리뷰 관리</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-12">
          <div class="card card-outline-secondary my-4">
            <div class="card-header">나의 리뷰</div>
            <div class="card-body">
                <div class="table-resposive">
                <table class="table table-hover" style="text-align:center">
                  <thead>
                    <tr class="active">
                        <th style="text-align:center">번호</th>
                        <th style="text-align:center">영화 제목</th>
                        <th style="text-align:center">장르</th>
                        <th style="text-align:center">리뷰 제목</th>
                        <th style="text-align:center">별점</th>
                        <th style="text-align:center">작성자</th>
                        <th style="text-align:center">날짜</th>
                        <th style="text-align:center">조회수</th>
                        <th style="text-align:center">댓글수</th>
                        <th style="text-align:center">수정</th>
                        <th style="text-align:center">삭제</th>
                    </tr>
                </thead>
    
                <tbody>    
                    <?php  
                        $con=mysqli_connect("localhost", "root", "", "team09") or die("접속 실패!");

                        $query = "SELECT * FROM posts WHERE post_author = '{$_SESSION['username']}'";
                                  
                        $select_post = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_post)){
                            $post_id = $row['post_id'];
                            $post_tags = $row['post_tags'];
                            $pcat_id = $row['post_genre'];
                            $post_title = $row['post_title'];
                            $post_star = $row['post_star'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_viewcount = $row['post_viewcount'];
                            $post_commentCount = $row['post_commentCount'];

                            echo "<tr>";
                            echo "<td>{$post_id}</td>";
                            echo "<td>{$post_tags}</td>";
                            echo "<td>{$pcat_id}</td>";
                            echo "<td>{$post_title}</td>";
                            echo "<td>{$post_star}</td>";
                            echo "<td>{$post_author}</td>";
                            echo "<td>{$post_date}</td>";
                            echo "<td>{$post_viewcount}</td>";
                            echo "<td>{$post_commentCount}</td>";        
                            echo "<td><a href='../posts.php?source=edit_mypost&p_id={$post_id}'>수정</a></td>";
                            echo "<td><a href='../posts.php?delete={$post_id}'>삭제</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            </div>
              
            <div class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                </ul>    
            </div>
                
          </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
    </div>
    <!-- /.container -->
    
    <?php
        if(isset($_GET['delete'])){
            $the_post_id = $_GET['delete'];
            $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
            $delete_query = mysqli_query($connection, $query);
            header("Location: includes/view_mypost.php");
        }
    ?>
</body>    

<?php include "footer.php";?>