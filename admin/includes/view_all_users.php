
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>UserRole</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                  $query = "SELECT * FROM userinfo";
                                  
                                   $select_user = mysqli_query($connection, $query);
                                  while($row = mysqli_fetch_assoc($select_user)){
                                    $user_id = $row['user_id'];  
                                    $username = $row['username'];
                                    $user_email = $row['email'];
                                    $user_gender = $row['gender'];
                                    $user_role = $row['user_role'];

                                      echo "<tr>";
                                      echo "<td>{$user_id}</td>";
                                      echo "<td>{$username}</td>";
                                      echo "<td>{$user_email}</td>";
                                      echo "<td>{$user_gender}</td>";
                                      echo "<td>{$user_role}</td>";
                                      echo "<td><a href='users.php?source=edit_users&u_id={$user_id}'>Edit</a></td>";
                    
                                      echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
                                      echo "</tr>";
                                  }
                                
                                ?>

                            </tbody>
                        </table>

                <?php
                  if(isset($_GET['delete'])){
                      $the_user_id = $_GET['delete'];
                  $query = "DELETE FROM userinfo WHERE user_id = {$the_user_id}";
                  $delete_query = mysqli_query($connection, $query);
                  header("Location: users.php");
                  }
                  ?>
