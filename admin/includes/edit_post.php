<?php

    if(isset($_GET['p_id'])){
        $the_post_id = $_GET['p_id'];
    }

        $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
                                  
            $select_post = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($select_post)){
              $post_id = $row['post_id'];  
              $pcat_id = $row['post_genre'];
              $post_title = $row['post_title'];
              $post_author = $row['post_author'];
              $post_date = $row['post_date'];
              $post_image = $row['post_image'];
              $post_content = $row['post_content'];
              $post_tags = $row['post_tags'];
              $post_commentCount = $row['post_commentCount'];
              $post_star = $row['post_star'];
            }

    if(isset($_POST['update_post'])){
        //$post_author = $_POST['author'];
        $post_title = $_POST['title'];
        $pcat_id = $_POST['post_category_id'];
        $post_star = $_POST['post_star'];
        $post_status = $_POST['post_status'];
        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $post_image = $_FILES['post_image']['name'];
        $post_image_temp = $_FILES['post_image']['tmp_name'];
     
        move_uploaded_file($post_image_temp, "../img/$post_image");

        if(empty($post_image)){
            $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
            $select_image = mysqli_query($connection,$query);
            while($row = mysqli_fetch_array($select_image)){
                $post_image = $row['post_image'];
            }
        }

        $query = "UPDATE posts SET ";
        $query .="post_title ='{$post_title}', ";
        $query .="post_genre ='{$pcat_id}', ";
        $query .="post_star ='{$post_star}', ";
        $query .="post_content ='{$post_content}', ";
        $query .="post_tags ='{$post_tags}', ";
        $query .="post_image ='{$post_image}' ";
        $query .="WHERE post_id = {$the_post_id} ";


        $update_post = mysqli_query($connection,$query);
        confirm($update_post);
    }

?>

<form action="" method="post" enctype="multipart/form-data">
   
   <div class="form-group">
       <label for="title">Post Title</label>
       <input value="<?php echo $post_title ?>" type="text" class="form-control" name="title">
   </div>

   <div class="form-group">
       <label for="post_category">Movie Genre</label>
       <br>
       <select name="post_category_id" class="form-control" id="">
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
       <select  name="post_star" class="form-control">
           <option value="<?php echo $post_star; ?>"> </option>
           <option value="0">☆</option>
           <option value="1">★</option>
           <option value="2">★★</option>
           <option value="3">★★★</option>
           <option value="4">★★★★</option>
           <option value="5">★★★★★</option>
       </select>
   </div>

   <div class="form-group">
       <label for="title">Post Author</label>
       <input value="<?php echo $post_author; ?>"type="text" class="form-control" name="author">
   </div>
   
   <div class="form-group">
       <label for="post_image">Post Image</label>
       <img width='100' src="../img/<?php echo $post_image; ?>" alt="">
       <input type="file" name="post_image">
   </div>

   <div class="form-group">
       <label for="post_tags">Movie</label>
       <br>
       <select name="post_tags" class="form-control">
       <option value='<?php echo $post_tags ?>'><?php echo $post_tags ?></option>
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
       <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
           <?php echo $post_content ?>
       </textarea>
   </div>

   <div class="form-group">
       <input type="submit" class="btn btn-primary" name="update_post" value="Update Post">
   </div>

           </form>