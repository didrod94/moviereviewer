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
                    <a class="list-group-item active" href="index.php">회원 정보 관리</a>
                    <a class="list-group-item" href=includes/view_mypost.php>나의 리뷰 관리</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
                    
            <?php    
                if(isset($_GET['source'])){
                    $source = $_GET['source'];
                }else{
                    $source = '';
                }
                switch($source){
                    case 'edit_myinfo';
                    include "includes/edit_myinfo.php";
                    break;

                    default:
                    include "index.php";
                    break;
                }       
            ?>
                    
                       
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
