<?php
// Start session
session_start();

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $password = $confirm_password = $contact_number = $name = $business_name = $address = "";
$email_err = $password_err = $confirm_password_err = $contact_number_err = $name_err = $business_name_err = $address_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM accommodators WHERE email = ?";

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
    
    // Validate contact number
    if(empty(trim($_POST["contact_number"]))){
        $contact_number_err = "Please enter contact number.";     
    } else{
        $contact_number = trim($_POST["contact_number"]);
    }

    // Validate name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";     
    } else{
        $name = trim($_POST["name"]);
    }

    // Validate business name
    if(empty(trim($_POST["business_name"]))){
        $business_name_err = "Please enter your business name.";     
    } else{
        $business_name = trim($_POST["business_name"]);
    }

    // Validate address
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter your address.";     
    } else{
        $address = trim($_POST["address"]);
    }

    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($contact_number_err) && empty($name_err) && empty($business_name_err) && empty($address_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO accommodators (email, password, contact_number, name, business_name, address) VALUES (?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ssssss", $param_email, $param_password, $param_contact_number, $param_name, $param_business_name, $param_address);
                
                // Set parameters
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                $param_contact_number = $contact_number;
                $param_name = $name;
                $param_business_name = $business_name;
                $param_address = $address;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    header("location: ../views/login-accom.php");
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }

        // Close connection
        mysqli_close($conn);
    }
  ?>  