<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>

<?php    

    // setting parameters for pagination

    $per_page = 5;

    if(isset($_GET['page'])) {

      $page = $_GET['page'];
    
    } else {

      $page = 1;

    }
 
    $start_from = ($page - 1) * $per_page;
 
    $sql  = "SELECT * "; 
    $sql .= "FROM person ";
    $sql .= "LEFT JOIN person_details "; 
    $sql .= "ON person.id = person_details.person_id ";   
    $sql .= "ORDER BY first_name ASC LIMIT $start_from, $per_page";
    
    $result = mysqli_query($connection, $sql);

    confirm_query($result);


?>

<?php include("includes/header.php"); ?>

<!-- Page Content -->
    <div class="container"> 

        <!-- Sort button -->
        <div id="sort_button" class="row col-md-12" >
            <div id="sort_button_2" class="btn-group col-md-12 ">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by: <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="index.php">First Name</a></li>
                <li><a href="sort_by_last_name.php">Last Name</a></li>
                <li><a href="sort_by_country.php">Country</a></li>
                <li><a href="sort_by_city.php">City</a></li>
              </ul>
              <br>
            </div> <!-- Sort button -->
        </div>    
   
        <div class="row col-md-10 col-md-offset-1" >
        
            <table " class="table table-striped table-hover">

                <tr id="color">

                      <th>Country</th>
                      <th>City</th>
                      <th>First Name</th>
                      <th>Last Name</th> 
                      <th>Nickname</th>

                      <th class="col-md-1"></th>

                </tr>
          
                <?php while ( $row = mysqli_fetch_array($result)) : ?>
                
                    <tr>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['nickname']; ?></td>    

                        <td><a class="btn btn-primary btn-sm" href="single_contact.php?id=<?php echo $row['person_id']; ?>">More Details</a></td>
                        
                    </tr>
            
                <?php endwhile; ?>

            </table>

        </div> <!-- /.row --> 
           
    </div> <!-- /.container -->
    

    <ul class="pager">
    
    <?php  

      $sql_pagination  = "SELECT * ";
      $sql_pagination .= "FROM person "; 
      $sql_pagination .= "LEFT JOIN person_details ";
      $sql_pagination .= "ON person.id = person_details.person_id";

      $result_pagination = mysqli_query($connection, $sql_pagination);
      confirm_query($result);

      $count = mysqli_num_rows($result_pagination);

      $total_pages = ceil($count / $per_page); 

       for($i=1; $i<=$total_pages; $i++){
          echo '<li><a href="index.php?page=' . $i . '">' . $i . '</a></li>';
       }

    ?>

    </ul>



<?php include("includes/footer.php"); ?>