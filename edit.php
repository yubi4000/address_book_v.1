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


if(isset($_POST['update'])) {
 
    $first_name = clear_input($_POST['first_name']);
    $last_name  = clear_input($_POST['last_name']);
    $nickname   = clear_input($_POST['nickname']);
    $street     = clear_input($_POST['street']);
    $number     = clear_input($_POST['number']);
    $city       = clear_input($_POST['city']);
    $zip_code   = clear_input($_POST['zip_code']);
    $country    = clear_input($_POST['country']);
    $email      = clear_input($_POST['email']);
    $phone_1    = clear_input($_POST['phone_1']);
    $phone_2    = clear_input($_POST['phone_2']);
    

    $sql_person  = "UPDATE person "; 
    $sql_person .= "SET first_name = '$first_name', last_name = '$last_name', nickname = '$nickname' ";
    $sql_person .= "WHERE id='$id' ";

    $result_person = mysqli_query($connection, $sql_person);
    confirm_query($result_person);

    $sql_details  = "UPDATE person_details ";
    $sql_details .= "SET street = '$street', number = '$number', city = '$city', zip_code = '$zip_code', country = '$country', email = '$email', phone_1 = '$phone_1', phone_2 = '$phone_2' WHERE person_id='$id'";
                
    $result_details = mysqli_query($connection, $sql_details);
    confirm_query($result_details);

    
    redirect_to("index.php");
    
    
}


?>

<?php include("includes/header.php"); ?>


    <!-- Page Content -->
    <div class="container content"> 

        <div class="row">
        
            <div class="col-md-8 col-md-offset-2">

                <form action="edit.php?id=<?php echo $id; ?>" method="post">

                    <div class="form-group col-md-4">
                        <label for="first_name">First Name</label>
                        <input class="form-control" type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
                    </div>
                 
                    <div class="form-group col-md-4">
                        <label for="last_name">Last Name</label>
                        <input class="form-control" type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
                    </div>
          
                    <div class="form-group col-md-4">
                        <label for="nickname">Nickname</label>
                        <input class="form-control" type="text" name="nickname" value="<?php echo $row['nickname']; ?>">
                    </div>
                
                    <div class="form-group col-md-8">
                        <label for="street">Street</label>
                        <input class="form-control" type="text" name="street" value="<?php echo $row['street']; ?>">
                    </div>
                  
                    <div class="form-group col-md-4">
                        <label for="number">Number</label>
                        <input class="form-control" type="text" name="number" value="<?php echo $row['number']; ?>">
                    </div>
                 
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input class="form-control" type="text" name="city" value="<?php echo $row['city']; ?>">
                    </div>
                  
                    <div class="form-group col-md-2">
                        <label for="zip_code">ZIP Code</label>
                        <input class="form-control" type="text" name="zip_code" value="<?php echo $row['zip_code']; ?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="country">Country</label>
                        <input class="form-control" type="text" name="country" value="<?php echo $row['country']; ?>">
                    </div>
              
                    <div class="form-group col-md-12">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>">
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="phone_1">Phone 1</label>
                        <input class="form-control" type="text" name="phone_1" value="<?php echo $row['phone_1']; ?>">
                    </div>
              
                    <div class="form-group col-md-6">
                        <label for="phone_2">Phone 2</label>
                        <input class="form-control" type="text" name="phone_2" value="<?php echo $row['phone_2']; ?>">
                    </div>
                   
                    
                    <div class="col-md-12 submit_button">

                        <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger col-md-2" role="button">Delete</a>
                     
                        <input class="btn btn-primary col-md-2 pull-right" type="submit" name="update" value="Update">
                    
                    </div>
                
                </form>
            
            </div>

        </div>
        <!-- /.row --> 

    </div>
    <!-- /.container -->


<?php include("includes/footer.php"); ?>