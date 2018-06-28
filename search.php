<?php 
  include "includes/header.php";
  include_once "includes/dbconnect.php"; 
  //session_start();

?>

    <!-- Navigation -->
    
    <?php include "includes/navigation.php"?>

    <!-- Page Content -->
    <div class="container center-block">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-10">
            <h1 class="page-header center-block">
                <b>전체 리뷰</b>   
            </h1></div>
            <form>
                <div class="pull-right">
                <div class="dropdown">
	               <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">번호순
	                 <span class="caret"></span>
	               </a>

                   <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <input type="checkbox" value="post_star">별점순
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">리뷰순</a></li>
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">평점순</a></li>
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">조회순</a></li>
                   </ul>
                </div>    
              </div>
                
                
                
                
                  <div class="form-group">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="post_star">별점순
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="post_viewcount">조회순
                    </label>
                  </div>
            </form>

            <div class="table-resposive">
            <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Genre</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                    <th>Views</th>
                                   
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
             echo "<h1> NO RESULT</h1>";
          }else{        

           while($row = mysqli_fetch_assoc($search_query)){
               $post_id = $row['post_id'];  
               $post_genre = $row['post_genre'];
               $post_title = $row['post_title'];
               $post_author = $row['post_author'];
               $post_date = $row['post_date'];
               $post_viewcount = $row['post_viewcount'];
        ?>
        <tr>
            <td class="no"><?php echo $post_id ?></td>
            <td><?php echo $post_genre ?></td>
            <td><a href='viewpost.php?p_id=<?php echo $post_id ?>'><?php echo $post_title ?></a></td>
            <td><?php echo $post_author ?></td>
            <td><?php echo $post_date ?></td>
            <td><?php echo $post_viewcount ?></td>
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
<!-- /.row -->

<?php include "includes/sidebar.php";   ?>

<hr>
<?php include "includes/footer.php"; ?>