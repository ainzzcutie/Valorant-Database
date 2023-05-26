<?php
include 'DBConnector.php';

if (isset($_POST['delete'])) {
    $user_id = $_POST['id'];

    // Prepare and execute the SQL query to retrieve user data based on name
    $deleteUserQuery = "DELETE FROM user WHERE user_id='$user_id'";
    if ($conn->query($deleteUserQuery) === true) {
        echo "<script>alert('Profile deleted successfully');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    } else {
        echo "Error: " . $deleteUserIconQuery . "<br>" . $conn->error;
    }
}
?>
