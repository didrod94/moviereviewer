
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Genre</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>Tag</th>
                                    <th>Comments</th>
                                    <th>star</th>
                                    <th>views</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                  $query = "SELECT * FROM posts";
                                  
                                   $select_post = mysqli_query($connection, $query);
                                  while($row = mysqli_fetch_assoc($select_post)){
                                    $post_id = $row['post_id'];  
                                    $pcat_id = $row['post_genre'];
                                    $post_title = $row['post_title'];
                                    $post_author = $row['post_author'];
                                    $post_date = $row['post_date'];
                                    $post_image = $row['post_image'];
                                    $post_content = $row['post_content'];
                                    $post_tags = $row['post_tags'];
                                    $post_commentCount = $row['post_commentCount'];
                                    
                                    $post_star = $row['post_star'];
                                    $post_viewcount = $row['post_viewcount'];

                                      echo "<tr>";
                                      echo "<td>{$post_id}</td>";
                                      echo "<td>{$pcat_id}</td>";
                                      echo "<td>{$post_title}</td>";
                                      echo "<td>{$post_author}</td>";
                                      echo "<td>{$post_date}</td>";
                                      echo "<td><img width='100' src='../img/$post_image' alt='image'></td>";
                                      echo "<td>{$post_content}</td>";
                                      echo "<td>{$post_tags}</td>";
                                      echo "<td>{$post_commentCount}</td>";
                                      
                                      echo "<td>{$post_star}</td>";
                                      echo "<td>{$post_viewcount}</td>";
                                      echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                                      echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                                      echo "</tr>";
                                  }
                                
                                ?>

                            </tbody>
                        </table>

                <?php
                  if(isset($_GET['delete'])){
                      $the_post_id = $_GET['delete'];
                  $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
                  $delete_query = mysqli_query($connection, $query);
                  header("Location: posts.php");
                  }
                  ?>