<?php 
  include "includes/header.php";
  include_once "includes/dbconnect.php"; 
  //session_start();
?>

<body>
    <!-- Navigation --> 
    <?php include "includes/navigation.php"?>
	<br><br><br>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">  

        <?php 
            if(isset($_GET['p_id'])){
                $the_post_id = $_GET['p_id'];
            }

         $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
         $select_all_post = mysqli_query($connection, $query);

         while($row = mysqli_fetch_assoc($select_all_post)){
             $post_title = $row['post_title'];
             $post_author = $row['post_author'];
             $post_date= $row['post_date'];
             $post_content = $row['post_content'];
             $post_image = $row['post_image'];
             $post_id = $row['post_id'];
             $post_star = $row['post_star'];
             $post_genre = $row['post_genre'];
             $post_tags = $row['post_tags'];
             $post_viewcount = $row['post_viewcount'];

             $viewcount_query = "UPDATE posts SET post_viewcount ='{$post_viewcount}'+1 "; 
             $viewcount_query .="WHERE post_id = {$the_post_id} ";
     
             $update_post = mysqli_query($connection,$viewcount_query);
             if(!$update_post){
                die("Query Failed .". mysqli_error($connection));
            }
         

        ?>
			
		<div class="card card-outline-secondary my-4">
			<!-- Title -->
            <div class="card-header"><h3><?php echo $post_title; ?></h3></div>
            <div class="card-body">	
               
            <!-- Author -->
            <p class="text-right">작성자 <?php echo $post_author ?></p>

			<!-- Date/Time -->
            <p class="text-right">
				<span class="glyphicon glyphicon-time"></span><?php echo $post_date ?>
			</p>
            <hr>
	
			<div class="container">
				<div class="row">
					<!-- Preview Image -->
					<div class="col-lg-4">
						<p class="text-center">
							<img class="img-responsive" width="300" height="400" src="../img/<?php echo $post_image ?>" alt="">	
						</p>
					</div>
					
					<!-- Post Content -->
					<div class="col-lg-8">
						<h3><?php echo $post_tags ?></h3>
            			<p><?php echo "장르: {$post_genre}"; ?></p>
            			<p><?php echo "평점: {$post_star}"; ?></p>
            			<p><?php echo $post_content ?></p>
					</div>
				</div>
			</div>

            

         	<?php } ?>
    	</div>
	  </div>
	</div>
  	</div>
	</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<?php include "includes/footer.php";?>