<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php"><span style="color:chartreuse">M</span>ovie <span style="color:chartreuse">R</span>eviewer</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>       <?php echo $_SESSION['username'] ?><b class="caret"></b></a>
                </li>  
                <li>
                  <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>

            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li>
                        <a href="../allReview.php"><i class="fa fa-fw fa-tachometer"></i> DashBoard</a>
                    </li>

                    <li>
                        <a href="./movies.php"><i class="fa fa-fw fa-film"></i> Movies</a>
                    </li>
                    <li>
                        <a href="./users.php"><i class="fa fa-fw fa-user"></i> Users</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="./posts.php">View All Posts</a>
                            </li>
                            <li>
                                <a href="./posts.php?source=add_post">Add Posts</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="active">
                        <a href="./categories.php"><i class="fa fa-fw fa-bars"></i> Categories</a>
                    </li>
                </ul>
            </div>