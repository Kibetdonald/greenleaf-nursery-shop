<div class="top-bar">
       <div class="container">
           <div class="banner">
           <img src="img/grocery-inn-banner.jpg" alt="" class="img-responsive">
       </div>
       </div>
       <div class="container links-container">
       <div class="links">
           <ul class="nav-links">
             <li><a href='index.php'>HOME</a></li>
              <?php
               $query = "SELECT id,name FROM categories ORDER BY id DESC LIMIT 8";
                            $result = mysqli_query($connection,$query);
                            
                            if(mysqli_num_rows($result) > 0){
                                $counter = 1;
                                while($row = mysqli_fetch_assoc($result)){
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    echo "<li><a href='category.php?id=$id'>$name</a></li>";
                                    $counter++;
                                }
                            }else{
                               
                            }
               ?>
              
               
               
           </ul>
       </div>
       </div>
   </div>