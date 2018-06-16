<?php
include('conn.php');

//check whether data with the name username has been submitted
if (isset($_POST['email'])) {

	//variables to hold our submitted data with post
	$username = $_POST['email'];
        //Encrypting our login password
	$pass = ($_POST['password']);

	//our sql statement that we will execute
	$sql = "SELECT * FROM project_users WHERE id='$username' AND password='$pass'";
	//Executing the sql query with the connection
	$re = mysqli_query($con, $sql);
     
    
	//check to see if there is any record / row in the database
	//if there is then the user exists
	if (mysqli_num_rows($re)) {
		//echo "Welcome";
        //creating a session name with username ad inserting the submitted username
        session_start();
        $_SESSION['user'] = $username;
        

		//redirecting to homepage
		header("Location: prodash.php");
    }

    else{
		//display error if no record exists
		echo "Error : Invalid Login Credentials";
    }
    
   
}

?>