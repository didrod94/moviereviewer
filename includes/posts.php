<?php include "includes/my_header.php";?>

<body>
    <!-- Navigation -->
    <?php include "includes/my_navigation.php"; ?>
    <!-- /.navbar-collapse -->

    <div class="container">

        <div class="row">
			<div class="col-lg-3">
          	<h1 class="my-4">마이페이지</h1>
          		<div class="list-group">
            		<a href="../index.php" class="list-group-item">회원 정보 관리</a>
            		<a href="view_mypost.php" class="list-group-item active" >나의 리뷰 관리</a>
          		</div>
        	</div>
            <?php   
                if(isset($_GET['source'])){
                    $source = $_GET['source'];
                }else{
                    $source = '';
                }
                switch($source) {
                    case 'add_review';
                    include "add_review.php";
                    break;
                }
            ?>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>


