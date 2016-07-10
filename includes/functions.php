<?php  

function redirect_to($link) {
    
    header("Location: $link");
    exit;
}



function confirm_query($result) {
	
	if(!$result) {
		die("Query failed" . mysqli_error($connection));
	}
}


function clear_input($file) {
	$file = trim($file);
	$file = stripslashes($file);
	$file = htmlspecialchars($file);
	$file = htmlentities($file);

	return $file;
}




?>