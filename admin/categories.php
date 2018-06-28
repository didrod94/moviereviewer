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
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">
                            <?php 
                               insert_cat();
                            ?>

                            <form action ="" method="POST">
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                          
                            <?php   //update include
                              if(isset($_GET['edit'])){
                                $cat_id = $_GET['edit'];

                                include "includes/edit_category.php";
                            
                            }
                                ?>
                         
                        </div> <!-- Add Category Form -->
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>index</th>

                                        <th>Movie Genre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                       findAllCat();
                                    ?>
                                    <?php 
                                     deleteCat();
                                    
                                    ?>
                                </tbody>
                            </table>

                        </div>
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
