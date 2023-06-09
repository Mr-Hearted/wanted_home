<?php
// Start session
session_start();

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$full_name = $birthday = $email = $password = $confirm_password = "";
$full_name_err = $birthday_err = $email_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM students WHERE email = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already registered.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate fullname
    if(empty(trim($_POST["full_name"]))){
        $full_name_err = "Please enter your fullname.";     
    }else{
        $full_name = trim($_POST["full_name"]);
    }

    if(empty(trim($_POST["birthday"]))){
        $birthday_err = "Please enter your birthday.";     
    }else{
        $birthday = trim($_POST["birthday"]);
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    

    // Check input errors before inserting in database
    if(empty($full_name_err) && empty($birthday_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO students (full_name, birthday, email, password) VALUES (?, ?, ?, ?)";

        if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ssss", $param_full_name, $param_birthday, $param_email, $param_password);
                
                // Set parameters
                $param_full_name = $full_name;
                $param_birthday = $birthday;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    header("location: ../views/login-student.php");

                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }else {
            echo "There are errors in your form. Please check and try again.";
        }

        // Close connection
        mysqli_close($conn);
    }
  ?>  