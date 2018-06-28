<?php 
  //include "includes/header.php";
  include_once "includes/dbconnect.php"; 
  //session_start();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Reviewer</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navigation -->
    <?php include "includes/navigation.php"?>

    <br><br><br>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
          
                <!-- Search Widget -->
                <div class="input-group">
                <input type="text" class="form-control" placeholder="영화 제목">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">검색</button>
                    </span>
                </div>
            </div>
            <div class="col-lg-2"></div>
            
            <!-- /.card -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-secondary my-4">
                            <div class="card-header">리뷰게시판</div>
              
                            <div class="card-body">
								
								<div class="btn-group pull-right">
                                 <?php include "includes/sortbar.php"; ?>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown">정렬
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu text-center">
                                        <li><a href="allReview.php">번호순</a></li>
                                        <li><a href="starReview.php">별점순</a></li>
                                        <li><a href="viewcountReview.php">조회순</a></li>
                                    </ul>
                                </div>
                                </div>
								
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
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                //조회순으로 정렬 
                                  $query = "SELECT * FROM posts ORDER BY post_viewcount DESC";
                                  
                                   $select_post = mysqli_query($connection, $query);
                                   if(!$select_post){
                                    die("Query Failed .". mysqli_error($select_post));
                                }
                                  while($row = mysqli_fetch_assoc($select_post)){
                                    $post_id = $row['post_id'];
                                    $post_tags = $row['post_tags'];
                                    $post_genre = $row['post_genre'];
                                    $post_title = $row['post_title'];
                                    $post_star = $row['post_star'];
                                    $post_author = $row['post_author'];
                                    $post_date = $row['post_date'];
                                    $post_viewcount = $row['post_viewcount'];
                                    $post_commentCount = $row['post_commentCount'];
                                ?>
                                <tr>
                                    <td class="no"><?php echo $post_id ?></td>
                                    <td class="no"><?php echo $post_tags ?></td>
                                    <td><?php echo $post_genre ?></td>
                                    <td><a href='viewpost.php?p_id=<?php echo $post_id ?>'><?php echo $post_title ?></a></td>
                                    <td><?php echo $post_star ?></td>
                                    <td><?php echo $post_author ?></td>
                                    <td><?php echo $post_date ?></td>
                                    <td><?php echo $post_viewcount ?></td>
                                    <td><?php echo $post_commentCount ?></td>
                                </tr>
                                 <?php } //while loop
                                ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
        
              
<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
</body>

<?php include "includes/footer.php";?>