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

	<!-- /.card -->
    <div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="card card-outline-secondary my-4">
                	<div class="card-header">리뷰게시판 - 장르별 검색 결과</div>
              
                    <div class="card-body">
								
						<div class="btn-group pull-right">
                    		<?php include "includes/sortbar.php"; ?>
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

          								if(isset($_POST['submit'])){
             								$search = $_POST['search_genre'];
             								$query = "SELECT * FROM posts WHERE post_genre LIKE '%$search%'";
             								$search_query = mysqli_query($connection, $query);

             								if(!$search_query){
                  								die("FAIL". mysqli_error($connection));
               								}
             								$count = mysqli_num_rows($search_query);
			  								if($count == 0){
             									echo "<p>결과 없음</p>";
          									}else{        
												
           									while($row = mysqli_fetch_assoc($search_query)){
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
            							<td><?php echo $post_tags ?></td>
            							<td><?php echo $post_genre ?></td>
										<td><a href='view_review.php?p_id=<?php echo $post_id ?>'><?php echo $post_title ?></a></td>
            							<td><?php echo $post_star ?></td>
            							<td><?php echo $post_author ?></td>
            							<td><?php echo $post_date ?></td>
            							<td><?php echo $post_viewcount ?></td>
            							<td><?php echo $post_commentCount ?></td>
        							</tr>
         							<?php } //while loop
    									}//else 
										}//if
        							?>

    							</tbody>
							</table>

						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
		</div>
</body>

<?php include "includes/footer.php";?>
