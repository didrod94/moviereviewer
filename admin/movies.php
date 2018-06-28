<?php 
 include "includes/ad_header.php";
 
 ?>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/ad_navigation.php"; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            MOVIES
                        </h1>
                       <?php 
                       
                       if(isset($_GET['source'])){
                           $source = $_GET['source'];
                       }else{
                           $source = '';
                       }
                       switch($source) {
                           case 'add_movie';
                           include "includes/add_movie.php";
                           break;

                           case 'edit_movie';
                           include "includes/edit_movie.php";
                           break;

                           default:
                           include "includes/view_all_movie.php";
                           break;
                       }
                       
                       
                       ?>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

</html>
