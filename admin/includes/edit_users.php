<?php

    if(isset($_GET['u_id'])){
        $the_user_id = $_GET['u_id'];
    }

        $query = "SELECT * FROM userinfo WHERE user_id = $the_user_id ";
                                  
            $select_user = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($select_user)){
              $user_id = $row['user_id'];  
              $username = $row['username'];
              $user_email = $row['email'];
              $user_password = $row['upassword'];
              $user_gender = $row['gender'];
              $user_role = $row['user_role'];
            }

    if(isset($_POST['update_user'])){
        
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_gender = $_POST['user_gender'];
        $user_password = $_POST['user_password'];
        $user_role = $_POST['user_role'];
        
        
     if(!empty($user_password)){
         $query_password = "SELECT upassword FROM userinfo WHERE user_id = $the_user_id";
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
        $query .="gender ='{$user_gender}', ";
        $query .="user_role ='{$user_role}' ";
        $query .="WHERE user_id = {$the_user_id} ";


        $update_post = mysqli_query($connection,$query);
        confirm($update_post);
    }

?>

<form action="" method="post" enctype="multipart/form-data">
   
   <div class="form-group">
       <label for="username">Username</label>
       <input value="<?php echo $username ?>" type="text" class="form-control" name="username">
   </div>


   <div class="form-group">
       <label for="gender">Gender</label>
       <br>
       <select  name="user_gender" class="form-control">
           <option value="<?php echo $user_gender; ?>"><?php echo $user_gender; ?></option>
           <option value="Female">Female</option>
           <option value="Male">Male</option>
       </select>
   </div>

   <div class="form-group">
       <label for="role">User Role</label>
       <br>
       <select  name="user_role" class="form-control">
           <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
           <option value="subscriber">subscriber</option>
           <option value="admin">admin</option>
       </select>
   </div>

   <div class="form-group">
       <label for="email">Email</label>
       <input value="<?php echo $user_email; ?>"type="text" class="form-control" name="user_email">
   </div>
   <div class="form-group">
       <label for="password">Password</label>
       <input value="PW Change" type="password" class="form-control" name="user_password">
   </div>


   <div class="form-group">
       <input type="submit" class="btn btn-primary" name="update_user" value="Update User">
   </div>

</form>
