<?php
session_start();
include("db_con/dbCon.php");
$conn = connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $client_id = $_SESSION['client_id'];

    // Get POST data and sanitize
    $first_Name = mysqli_real_escape_string($conn, $_POST['first_Name']);
    $last_Name = mysqli_real_escape_string($conn, $_POST['last_Name']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $full_address = mysqli_real_escape_string($conn, $_POST['full_address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $zip_code = mysqli_real_escape_string($conn, $_POST['zip_code']);

    // Create SQL query to update user information
    $sql = "UPDATE user
            JOIN client ON user.u_id = client.client_id
            SET user.first_Name = '$first_Name',
                user.last_Name = '$last_Name',
                client.contact_number = '$contact_number',
                client.full_address = '$full_address',
                client.city = '$city',
                client.zip_code = '$zip_code'
            WHERE user.u_id = '$client_id'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect with success message
        header("Location: u_profile.php?ok=1");
    } else {
        // Redirect with error message (you can customize the message)
        header("Location: u_profile.php?error=1");
    }

    // Close the connection
    mysqli_close($conn);
} else {
    // Redirect to profile page if accessed directly
    header("Location: u_profile.php");
}
?>