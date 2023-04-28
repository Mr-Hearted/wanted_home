<?php
	session_start();
	
	// Check if the user is already logged in, if yes then redirect to home page
	if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
	    header("location: ../views/homepage.php");
	    exit;
	}
	
	// Include config file
	require_once "config.php";
	
	// Define variables and initialize with empty values
	$email = $password = "";
	$email_err = $password_err = "";
	
	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	    // Check if email is empty
	    if(empty(trim($_POST["email"]))){
	        $email_err = "Please enter username.";
	    } else{
	        $email = trim($_POST["email"]);
	    }
	    
	    // Check if password is empty
	    if(empty(trim($_POST["password"]))){
	        $password_err = "Please enter your password.";
	    } else{
	        $password = trim($_POST["password"]);
	    }
	    
	    // Validate credentials
	    if(empty($email_err) && empty($password_err)){
	        // Prepare a select statement
	        $sql = "SELECT id, email, password FROM students WHERE email = ?";
	        
	        if($stmt = mysqli_prepare($conn, $sql)){
	            // Bind variables to the prepared statement as parameters
	            mysqli_stmt_bind_param($stmt, "s", $param_email);
	            
	            // Set parameters
	            $param_email = $email;
	            
	            // Attempt to execute the prepared statement
	            if(mysqli_stmt_execute($stmt)){
	                // Store result
	                mysqli_stmt_store_result($stmt);
	                
	                // Check if username exists, if yes then verify password
	                if(mysqli_stmt_num_rows($stmt) == 1){                    
	                    // Bind result variables
	                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
	                    if(mysqli_stmt_fetch($stmt)){
	                        if(password_verify($password, $hashed_password)){
	                            // Password is correct, so start a new session
	                            session_start();
	                            
	                            // Store data in session variables
	                            $_SESSION["logged_in"] = true;
	                            $_SESSION["id"] = $id;
	                            $_SESSION["email"] = $email;                            
	                            
	                            // Redirect user to home page
	                            header("location: ../views/get-started.php");
	                        } else{
	                            // Display an error message if password is not valid
	                            $password_err = "The password you entered was not valid.";
	                        }
	                    }
	                } else{
	                    // Display an error message if username doesn't exist
	                    $email_err = "No account found with that username.";
	                }
	            } else{
	                header("location: ../views/404.php");
	            }
	
	            // Close statement
	            mysqli_stmt_close($stmt);
	        }
	    }
	    
	    // Close connection
	    mysqli_close($conn);
	}
?>
