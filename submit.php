<?php
// Start the session
session_start();

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jam');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $wasteCategory = mysqli_real_escape_string($db, $_POST['waste-category']);
    $wasteType = mysqli_real_escape_string($db, $_POST['waste-type']);
    $otherInfo = mysqli_real_escape_string($db, $_POST['other-info']);
    $wetness = mysqli_real_escape_string($db, $_POST['wetness']);
    $weight = mysqli_real_escape_string($db, $_POST['weight']);
    $additionalInfo = mysqli_real_escape_string($db, $_POST['additional-info']);
    $contactDetails = mysqli_real_escape_string($db, $_POST['contact-details']);

    // Insert data into the database
    $query = "INSERT INTO waste_info (waste_category, waste_type, other_info, wetness, weight, additional_info, contact_details) 
              VALUES ('$wasteCategory', '$wasteType', '$otherInfo', '$wetness', '$weight', '$additionalInfo', '$contactDetails')";
    
    if (mysqli_query($db, $query)) {
        $_SESSION['message'] = "Data submitted successfully";
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($db);
    }
    
    // Close the database connection
    mysqli_close($db);

    // Redirect to buyer.php
    header('Location: seller.html');
    exit();
}
?>
