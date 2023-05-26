<link rel="stylesheet" href="styles.css">
<link href="https://fonts.cdnfonts.com/css/valorant" rel="stylesheet">

<div id="container">
    <h1>Valorant Update Profile</h1>
    <?php
    include 'DBConnector.php';

    if (isset($_POST['update'])) {
        $user_id = $_POST['id'];

        // Prepare and execute the SQL query to retrieve user data based on name
        $selectUserQuery = "SELECT * FROM user WHERE user_id='$user_id'";
        $result = $conn->query($selectUserQuery);

        if ($result->num_rows > 0) {
            // Display the form to update user data
            $row = $result->fetch_assoc();
            ?>
            <form method="POST">
                <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                <label for="name">Name: </label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
                <label for="age">Age: </label>
                <input type="number" name="age" value="<?php echo $row['age']; ?>" min=0 required><br>
                <label for="email">Email: </label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required> <br>
                <label for="address">Address: </label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>" required><br>

                <h2>Choose an image:</h2>
                <label for="image1"><img src="images/chamber.png"></label>
                <input type="radio" id="image1" name="image" value="images/chamber.png" required>
                <label for="image2"><img src="images/reyna.png"></label>
                <input type="radio" id="image2" name="image" value="images/reyna.png" required>
                <label for="image3"><img src="images/jett.png"></label>
                <input type="radio" id="image3" name="image" value="images/jett.png" required>
                <label for="image4"><img src="images/killjoy.png"></label>
                <input type="radio" id="image4" name="image" value="images/killjoy.png" required>
                <input type="submit" name="update-profile">
            </form>
            <h1 id="status"></h1>
            <?php
        } else {
            echo "No user found with the given ID.";
        }
    }
    ?>
</div>

<?php
if (isset($_POST['update-profile'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $image = $_POST['image'];

    // Prepare and execute the SQL query to update user data
    $updateUserQuery = "UPDATE user SET name='$name', age='$age', email='$email', address='$address' WHERE user_id='$user_id'";

    if ($conn->query($updateUserQuery) === true) {
        // Update successful
        $updateUserIconQuery = "UPDATE user_icon SET icon='$image' WHERE user_id='$user_id'";
        $conn->query($updateUserIconQuery);
        echo "<script>alert('Profile updated successfully');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    } else {
        echo "Error: " . $updateUserQuery . "<br>" . $conn->error;
    }
}
?>

