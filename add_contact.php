<?php  include ("includes/connection.php"); ?>
<?php  include ("includes/functions.php");  ?>

<?php 


if (isset($_POST['submit'])) {

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

    // inserting into PERSONAL table
    $sql_person  = "INSERT INTO person ";
    $sql_person .= "(first_name, last_name, nickname)";
    $sql_person .= "VALUES ('$first_name', '$last_name', '$nickname')";

    $result_person = mysqli_query($connection, $sql_person);
    
    confirm_query($result_person);
    
    $person_id = mysqli_insert_id($connection); 
    
    // inserting into DETAILS table
    if(!empty($person_id)) {

        $sql_details  = "INSERT INTO person_details ";
        $sql_details .= "(person_id, street, number, city, zip_code, country, email, phone_1, phone_2) ";
        $sql_details .= "VALUES ('$person_id','$street', '$number', '$city', '$zip_code', '$country', '$email', '$phone_1', '$phone_2')";
        
        $result_details = mysqli_query($connection, $sql_details);

        confirm_query($result_details);
        
        redirect_to("index.php");
        
    
    }

} 
?>

<?php include("includes/header.php"); ?>


    <!-- Page Content -->
    <div  class="container content"> 

        <div class="row">
        
            <div class="col-md-8 col-md-offset-2">
            
                <form action="" method="post">
                    <div class="form-group col-md-4">
                        <label for="first_name">First Name</label>
                        <input class="form-control" type="text" name="first_name">
                    </div>
                 
                    <div class="form-group col-md-4">
                        <label for="last_name">Last Name</label>
                        <input class="form-control" type="text" name="last_name">
                    </div>
          
                    <div class="form-group col-md-4">
                        <label for="nickname">Nickname</label>
                        <input class="form-control" type="text" name="nickname">
                    </div>
                
                    <div class="form-group col-md-8">
                        <label for="street">Street</label>
                        <input class="form-control" type="text" name="street">
                    </div>
                  
                    <div class="form-group col-md-4">
                        <label for="number">Number</label>
                        <input class="form-control" type="text" name="number">
                    </div>
                 
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input class="form-control" type="text" name="city">
                    </div>
                  
                    <div class="form-group col-md-2">
                        <label for="zip_code">ZIP Code</label>
                        <input class="form-control" type="text" name="zip_code">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="country">Country</label>
                        <input class="form-control" type="text" name="country">
                    </div>
              
                    <div class="form-group col-md-12">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email">
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="phone_1">Phone 1</label>
                        <input class="form-control" type="text" name="phone_1"">
                    </div>
              
                    <div class="form-group col-md-6">
                        <label for="phone_2">Phone 2</label>
                        <input class="form-control" type="text" name="phone_2"">
                    </div>
                    <br>
                    <div class="col-md-12 submit_button">
                        <input class="btn btn-primary   col-md-2 pull-right" type="submit" name="submit" value="Submit">
                    </div>

                </form>
           
            </div> <!--col-md-8 col-md-offset-2-->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->


<?php include("includes/footer.php"); ?>