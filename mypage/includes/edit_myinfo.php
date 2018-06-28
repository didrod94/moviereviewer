<?php
    if(isset($_GET['edit'])){
        $the_username = $_GET['edit'];
    }

    $query = "SELECT * FROM userinfo WHERE username = '{$the_username}'";
                                  
    $select_user_query = mysqli_query($connection, $query);
    
    if(!$select_user_query)
        die("쿼리 실패!". mysqli_error($connection));

    while($row = mysqli_fetch_assoc($select_user_query)){
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_email = $row['email'];
        $user_password = $row['upassword'];
        $user_gender = $row['gender']; 
        $user_id = $row['user_id'];
    }
           

    if(isset($_POST['edit_myinfo'])){
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_gender = $_POST['user_gender'];
        $user_password = $_POST['user_password'];
        
        if(!empty($user_password)){
            $query_password = "SELECT upassword FROM userinfo WHERE username = '{$the_username}'";
            $get_user = mysqli_query($connection, $query_password);
            confirm($get_user);

            $row = mysqli_fetch_array($get_user);

            $db_user_password = $row['upassword'];

            if($db_user_password != $user_password){
                $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost => 12'));
            }
        }
     
        $query = "UPDATE userinfo SET ";
        $query .="username ='{$username}', ";
        $query .="email ='{$user_email}', ";
        $query .="upassword ='{$user_password}', ";
        $query .="gender ='{$user_gender}' ";
        $query .="WHERE username = '{$the_username}' ";
        
        $update_myinfo = mysqli_query($connection,$query);
        confirm($update_myinfo);
    }

?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Reviewer - My Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/shop-item.css" rel="stylesheet">
    
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</head>


<body>
    <!-- Navigation -->
    <?php include "my_navigation.php"; ?>
    <!-- /.navbar-collapse -->

    
    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-12">  

          <div class="card card-outline-secondary my-4">
            <div class="card-header">회원 정보 수정</div>
            <div class="card-body">
               
                  <form action="" method="post" enctype="multipart/form-data">  
            
                    <div class="form-group">
                        <label class="control-label" for="username">ID</label>
                        <input value="<?php echo $username ?>" type="text" class="form-control" name="username"> 
                    </div>
              
                <div class="form-group">
                    <label for="email">이메일</label>
                    <input value="<?php echo $user_email; ?>"type="text" class="form-control" name="user_email">
                </div>

              
                <div class="form-group">
                    <label for="gender">성별</label>
                <br>
                <select name="user_gender" class="form-control">
                    <option value="<?php echo $user_gender; ?>"></option>
                    <option value="여자">여자</option>
                    <option value="남자">남자</option>
                </select>
                </div>

               
                <div class="form-group">
                    <label for="password">패스워드</label>
                    <input value="PW Change" type="password" class="form-control" name="user_password">
                </div>
              
              <div class="form-group">     
              <ul class="navbar-nav ml-auto">  
                <li class="nav-item">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="edit_myinfo" value="수정">
                    </div>
                </li>
              </ul>  
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        </div>
      </div>
    </div>
    <!-- /.container -->   
        
    
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

<?php include "footer.php";?>