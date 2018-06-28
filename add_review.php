<?php
include_once "includes/functions.php";
include "includes/header.php";
include_once "includes/dbconnect.php";
?>

<?php
 session_start(); 

if(isset($_POST['add_review'])){
    $post_title = $_POST['title'];
    $post_title = mysqli_real_escape_string($connection, $post_title);
    //$post_author = $_SESSION['username'];
    $post_category_id =$_POST['post_category_id'];
    $post_category_id = mysqli_real_escape_string($connection,  $post_category_id);
    $post_star = $_POST['post_star'];

    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];

    $post_tags = $_POST['post_tags'];
    $post_tags = mysqli_real_escape_string($connection, $post_tags);
    $post_content = $_POST['post_content'];
    $post_content = mysqli_real_escape_string($connection, $post_content);
    $post_date = date('d-m-y');

    $post_comment_count = 11;

    move_uploaded_file($post_image_temp, "../img/$post_image");

    $query = "INSERT INTO posts (post_genre, post_title, post_author, post_date, post_image, post_content,post_tags,post_commentCount, post_star) 
    VALUES('{$post_category_id}','{$post_title}','{$_SESSION['username']}',now(),'{$post_image}',
             '{$post_content}','{$post_tags}','{$post_comment_count}','{$post_star}')";


    $create_post_query = mysqli_query($connection, $query);

}
?>

<body>
	<!-- Navigation -->
    <?php include "includes/navigation.php"?>
	<br><br><br>
	
	<!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-12">  

          <div class="card card-outline-secondary my-4">
            <div class="card-header">리뷰 작성</div>
            <div class="card-body">
  
                <form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
                        <label for="post_tags">영화 제목</label>
						<input type="text" class="form-control" name="post_tags">
					</div>
                    
              		<div class="form-group">
                        <label for="post_category">장르</label>
                        <br>
                        <select name="post_category_id" class="form-control">
                            <?php 
								$query = "SELECT * FROM categories";
                                $select_cat = mysqli_query($connection, $query);
							
                                while($row = mysqli_fetch_assoc($select_cat)){
                                    $cat_id = $row['cat_id'];  
                                    $cat_title = $row['cat_title'];
									echo "<option value='$cat_title'>{$cat_title}</option>";
                                }
                            ?>
                        </select>
                    </div>
					
                    <div class="form-group">
                        <label for="title">리뷰 제목</label>
						<input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="post_starRate">별점</label>
                        <br>
                        <select name="post_star" class="form-control">
                            <option value="<?php echo $post_star; ?>"></option>
                            <option value="0">☆</option>
                            <option value="1">★</option>
                            <option value="2">★★</option>
                            <option value="3">★★★</option>
                            <option value="4">★★★★</option>
                            <option value="5">★★★★★</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="post_conten">리뷰 내용</label>
                        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="post_image">이미지</label>
                        <input type="file" name="post_image">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="add_review" value="글쓰기">
                    </div>
            	</form>
          </div>
          <!-- /.card -->
        </div>
        </div>
      </div>
    </div>
    <!-- /.container -->   

</body>

<?php include "includes/footer.php";?>