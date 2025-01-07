<?php
session_start();

// initializing variables
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jam');

// REGISTER CONTACT MESSAGE
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    // form validation: ensure that the form is correctly filled
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($message)) { array_push($errors, "Message is required"); }

    // register message if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO contact_messages (name, email, message) 
                  VALUES('$name', '$email', '$message')";
        mysqli_query($db, $query);
        
        header('location: thank_you.php');
    }
}
?>

