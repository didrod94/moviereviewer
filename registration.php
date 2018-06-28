<?php  include "includes/dbconnect.php";   
        include "includes/header.php"; 
        include "includes/functions.php";
        session_start();
?>

 <?php 

 if(isset($_POST['create_user'])){
    
    $username = trim( $_POST['username']);
    
    $user_password = trim ($_POST['password']);
    
    $user_email = trim($_POST['user_email']);
    
    $user_gender = trim($_POST['gender']);

    if(username_exists($username)){
       echo  $message= "이미 존재하는 이름입니다!";
       //header("Location ../registration.php");
    }
    //if nothing empty than
    if(!empty($username)&&!empty($user_email)&&!empty($user_password)){
        //prevent injection
        $username = mysqli_real_escape_string($connection, $username);
        $user_password = mysqli_real_escape_string($connection, $user_password);
        $user_email = mysqli_real_escape_string($connection, $user_email);

        //hash password
        $user_password = password_hash('$user_password', PASSWORD_BCRYPT, array('cost'=>12));

        $query = "INSERT INTO userinfo(username, email, upassword, gender, user_role) ";
        $query .= "VALUES('{$username}','{$user_email}', '{$user_password}','{$user_gender}','subscriber' )";
        $register_user_query = mysqli_query($connection, $query);
        if(!$register_user_query){
            die("쿼리 실패!". mysqli_error($connection) .' '.mysqli_errno($connection));
        }

        echo $message = "회원가입이 완료되었습니다.";

    }else{
        echo "정보를 입력하세요!";
    }
 }
?>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../mainpage/mainpage.php"><span style="color:chartreuse">M</span>ovie <span style="color:chartreuse">R</span>eviewer</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">로그인</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


 <!-- Page Content -->
 
    
<section id="login">
    <div class="container">
        <div class="row">
        <div class="col-12">
                <div class="form-wrap text-center">
                    <br><h1>회원가입</h1><br>
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form role="form" action="" method="post" id="login-form" autocomplete="off">
                    <div class="form-group">
                        <label for="username" class="sr-only">username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="user_email" id="user_email" class="form-control" placeholder="somebody@example.com">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="gender" class="sr-only">Gender</label>
                        <select name="gender" id="key" class="form-control" placeholder="Gender">
                            <option value = "여자">여자</option>
                            <option value = "남자">남자</option>
                        </select>
                    </div>  
                
                    <input type="submit" name="create_user" id="btn-login" class="btn btn-success btn-custom btn-lg btn-block" value="회원가입">
                </form>
            </div>
           
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    </section>
<br><br>
<hr>

<?php include "includes/footer.php";?>

