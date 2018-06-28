<?php include "includes/my_header.php"; ?>

<?php
    $con=mysqli_connect("localhost", "root", "", "team09") or die("접속 실패!");

    $query="SELECT * FROM userinfo WHERE username='".$_SESSION['username']."'";
    $select_user_query = mysqli_query($connection, $query);
      
    if(!$select_user_query)
        die("Query failed". mysqli_error($connection));

    while($row = mysqli_fetch_array($select_user_query)){

        $db_username = $row['username'];
        $db_email = $row['email'];
        $db_password = $row['upassword'];
        $db_gender = $row['gender'];
        $db_user_role = $row['user_role'];
    }
?>


<body>

    <!-- Navigation -->
    <?php include "includes/my_navigation.php"; ?>
    <!-- /.navbar-collapse -->

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">마이페이지</h1>
          <div class="list-group">
            <a href="index.php" class="list-group-item active">회원 정보 관리</a>
            <a href="includes/view_mypost.php" class="list-group-item">나의 리뷰 관리</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-12">
            
          <div class="card card-outline-secondary my-4">
            <div class="card-header">회원 정보</div>
            <div class="card-body">
              <p class="card-text">ID <?php echo "{$db_username}"; ?></p>
              <p class="card-text">이메일 <?php echo "{$db_email}"; ?></p>
              <p class="card-text">성별 <?php echo "{$db_gender}"; ?></p>
              
              <ul class="navbar-nav ml-auto">  
                <li class="nav-item">
                  <a class="btn btn-primary" href="users.php?source=edit_myinfo&edit=<?php echo $db_username?>">수정</a>  
                  <a class="btn btn-danger" href="index.php/?delete=<?php echo $db_username?>">탈퇴</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.card -->

          <?php
            if(isset($_GET['delete'])){
                $the_username = $_GET['delete'];
                $query = "DELETE FROM userinfo WHERE username = '{$the_username}'";
                $delete_query = mysqli_query($connection, $query);
                header("Location: ../../index.php");
            }
          ?>    
            
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