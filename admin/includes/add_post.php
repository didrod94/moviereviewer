<?php
include_once "ad_functions.php";
//session_start();

if(isset($_POST['create_post'])){
    $post_title = $_POST['title'];
    $post_title = mysqli_real_escape_string($connection, $post_title);
    //$post_author = $_SESSION['username'];
    $post_category_id =$_POST['post_category_id'];
    $post_category_id = mysqli_real_escape_string($connection,  $post_category_id);
    $post_star = $_POST['post_star'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

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

    confirm($create_post_query);
   
}



?>
<form action="" method="post" enctype="multipart/form-data">
   
   <div class="form-group">
       <label for="title">Post Title</label>
       <input type="text" class="form-control" name="title">
   </div>

   <div class="form-group">
       <label for="post_category">Movie Genre</label>
      <!-- <select name="post_category" id="">-->
       <br>
       <select name="post_category_id" class="form-control">
         <?php 
             $query = "SELECT * FROM categories";
             $select_cat = mysqli_query($connection, $query);
            
             confirm($select_cat);
             while($row = mysqli_fetch_assoc($select_cat)){
              $cat_id = $row['cat_id'];  
              $cat_title = $row['cat_title'];
              
              echo "<option value='$cat_title'>{$cat_title}</option>";
            }

           ?>
       </select>
   </div>

   <div class="form-group">
       <label for="post_starRate">Movie Rating</label>
       <br>
       <select name="post_star" class="form-control">
           <option value="0">-</option>
           <option value="1">★</option>
           <option value="2">★★</option>
           <option value="3">★★★</option>
           <option value="4">★★★★</option>
           <option value="5">★★★★★</option>
       </select>
   </div>

   <div class="form-group">
       <label for="post_image">Post Image</label>
       <input type="file" name="image">
   </div>

   <div class="form-group">
       <label for="post_tags">Movie</label>
       <br>
       <select name="post_tags" class="form-control">
         <?php 
             mysqli_query($connection, 'set names utf8');
             $query = "SELECT * FROM MOVIE";
             $select_cat = mysqli_query($connection, $query);
            
             confirm($select_cat);
             while($row = mysqli_fetch_assoc($select_cat)){
              $movie_name = $row['name'];  
              
              echo "<option value='$movie_name'>{$movie_name}</option>";
            }

           ?>
       </select>
   </div>

   <div class="form-group">
       <label for="post_conten">Post Contents</label>
       <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
   </div>
   <div class="form-group">
       <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
   </div>

</form>