<?php
// Include your database connection and any necessary configurations
require_once "config.php";
require_once "db_module.php";

// Start the session
session_start();

// Check if the productID is provided in the GET request
if (isset($_GET['idofpro'])) {
    // Get the productID from the GET request
    $productID = $_GET['idofpro'];

    // Check if the user is logged in and has a valid session
    if (isset($_SESSION['username'])) {
        // Get the username from the session
        $username = $_SESSION['username'];

        // Query to check if the productID and accountID exist in the favProduct table
        $query = "SELECT * FROM favProduct WHERE productID = '$productID' AND accountID = (
                    SELECT accountID FROM UserAccount WHERE username = '$username'
                  )";
        $result = mysqli_query($link, $query);

        // Check if the query was successful
        if ($result) {
            // Check if the product is in the user's favorites list
            if (mysqli_num_rows($result) > 0) {
                // Product exists in the favorites list
                echo 'exists';
            } else {
                // Product does not exist in the favorites list
                echo 'not_exists';
            }
        } else {
            // Query execution failed
            echo 'error';
        }
    } else {
        // User is not logged in
        echo 'not_logged_in';
    }
} else {
    // ProductID is not provided in the request
    echo 'missing_product_id';
}

// Close the database connection
mysqli_close($link);
?>