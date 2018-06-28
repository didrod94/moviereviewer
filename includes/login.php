<?php include_once "dbconnect.php"; ?>
<?php 
 
 session_start(); 

  if(isset($_POST['login'])){
      $username = $_POST['username'];
      $user_password = $_POST['password'];
    
      //sql injection prevent
      $username = mysqli_real_escape_string($connection, $username);
      $user_password = mysqli_real_escape_string($connection, $user_password);

      $query="SELECT * FROM userinfo WHERE username = '{$username}'";
      $select_user_query = mysqli_query($connection, $query);
      
      if(!$select_user_query){
         die("Query failed". mysqli_error($connection));
      }
     
     //$passwordh = password_hash('$password', PASSWORD_BCRYPT, array('cost'=>12));
      
     while($row = mysqli_fetch_array($select_user_query)){

       $db_username = $row['username'];
       $db_password = $row['upassword'];
       $db_gender = $row['gender'];
       $db_email = $row['email'];
       $db_user_role = $row['user_role'];

     }

if(password_verify($user_password,$db_password)){
  
  $_SESSION['username'] = $db_username;
  $_SESSION['gender'] = $db_gender;
  $_SESSION['email'] = $db_email;
  $_SESSION['user_role'] = $db_user_role;


  if($_SESSION['user_role'] == "subscriber"){
    header("Location: ../mainpage/mainpage.php");
    exit();
  }
  else{
    header("Location: ../admin/index.php");
    exit();
  }
  
  }else {
    echo "로그인 실패";
}

  
  
}//if


?>