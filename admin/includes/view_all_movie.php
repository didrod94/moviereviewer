
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Genre</th>
                                    <th>director</th>
                                    <th>date</th>
                                    <th>rating</th>
                                    <th>runtime</th>
                                    <th>nation</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                  mysqli_query($connection, 'set names utf8');
                                  $query = "SELECT * FROM movie";
                                  
                                   $select_movie = mysqli_query($connection, $query);
                                  while($row = mysqli_fetch_assoc($select_movie)){
                                    $movie_name = $row['name'];  
                                    $movie_genre = $row['genre'];
                                    $movie_director = $row['director'];
                                    $movie_date = $row['date'];
                                    $movie_rating = $row['rating'];
                                    $movie_runtime = $row['runningtime'];
                                    $movie_nation = $row['nationality'];

                                      echo "<tr>";
                                      echo "<td>{$movie_name}</td>";
                                      echo "<td>{$movie_genre}</td>";
                                      echo "<td>{$movie_director}</td>";
                                      echo "<td>{$movie_date}</td>";
                                      echo "<td>{$movie_rating}</td>";
                                      echo "<td>{$movie_runtime}</td>";
                                      echo "<td>{$movie_nation}</td>";
                                      
                                      echo "<td><a href='movies.php?delete={$movie_name}'>Delete</a></td>";
                                      echo "<td><a href='posts.php?source=edit_post&p_id={$movie_name}'>Edit</a></td>";
                                      echo "</tr>";
                                  }
                                
                                ?>

                            </tbody>
                        </table>

                <?php
                  if(isset($_GET['delete'])){
                      $the_movie_name = $_GET['delete'];
                  $query = "DELETE FROM movie WHERE name = {$the_movie_name}";
                  $delete_query = mysqli_query($connection, $query);
                  header("Location: movies.php");
                  }
                  ?>