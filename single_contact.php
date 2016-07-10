<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>

<?php

$id = $_GET['id']; 

$sql  = "SELECT * FROM person "; 
$sql .= "LEFT JOIN person_details "; 
$sql .= "ON person.id = person_details.person_id ";
$sql .= "WHERE person_id ='$id'";

$result = mysqli_query($connection, $sql);
confirm_query($result);

$row = mysqli_fetch_array($result);


?>

<?php include("includes/header.php"); ?>


    <!-- Page Content -->
    <div class="container"> 
        <!-- Row -->
        <div class="row text-center  col-md-10 col-md-offset-1">
        
            <div id="div1" class="col-md-8 col-md-offset-2  ">
                
                <h3><?php echo $row['first_name'] . " " .$row['last_name']; ?><?php echo " (" . $row['nickname'] . ") "  ;?></h3>
                    
                
                <div id="div2" class="col-md-8 col-md-offset-2">
                  
                  <hr>
                  <h4>Address </h4>
                  <?php echo $row['street'] . " " . $row['number']; ?><br>
                  <?php echo $row['zip_code'] . " " . $row['city'];?><br>
                  <?php echo $row['country']; ?><br>
                  <hr>

                </div> 

                <div id="div3" class="col-md-8 col-md-offset-2">
                
                  <h4>Phone and Email</h4>
                  
                  <?php echo $row['phone_1']; ?><br>  
                  <?php echo $row['phone_2']; ?><br> 
                  <?php echo $row['email']; ?><br>

                </div>

            </div>

            <div  class="col-md-8 col-md-offset-2"> 

                <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger col-md-2 pull-left" role="button">Delete</a>
             
                <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-primary col-md-2 pull-right" role="button">Edit</a>
            </div>

        </div> <!-- Row -->               
                        
                    
                
                
            
            </div>

        </div><!-- /.row -->
        
    </div><!-- /.container -->
    


<?php include("includes/footer.php"); ?>