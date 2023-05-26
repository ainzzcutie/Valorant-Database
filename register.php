<?php
include 'DBConnector.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $image = $_POST['image'];

    // Prepare and execute the SQL query to insert data into the user table
    $insertUserQuery = "INSERT INTO user (name, age, address, email) VALUES ('$name', '$age', '$address', '$email')";

    if ($conn->query($insertUserQuery) === true) {
        $user_id = $conn->insert_id; // Retrieve the generated user_id

        // Prepare and execute the SQL query to insert data into the user_icon table
        $insertIconQuery = "INSERT INTO user_icon (user_id, icon) VALUES ('$user_id', '$image')";

        if ($conn->query($insertIconQuery) === true) {
            echo "<script>alert('Profile registered successfully');</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        } else {
            echo "Error: " . $insertIconQuery . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $insertUserQuery . "<br>" . $conn->error;
    }
}
?>
