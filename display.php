<link rel="stylesheet" href="styles.css">
<link href="https://fonts.cdnfonts.com/css/valorant" rel="stylesheet">

<div id="container">
    <h1>Valorant Profile</h1>
    <?php
    include 'DBConnector.php';

    if (isset($_POST['display'])) {
        $user_id = $_POST['id'];

        // Prepare and execute the SQL query to retrieve user data based on name
        $selectUserQuery = "SELECT * FROM user NATURAL JOIN user_icon WHERE user_id='$user_id'";
        $result = $conn->query($selectUserQuery);

        if ($result->num_rows > 0) {
            // Display the user data
            while ($row = $result->fetch_assoc()) {
                echo "<img id='profilepic'" . "src='" . $row['icon'] . "'>";
                echo "<h2 class='profile'>User ID: " . $row['user_id'] . "</h2>";
                echo "<h2 class='profile'>User Name: " . $row['name'] . "</h2>";
                echo "<h2 class='profile'>User Age: " . $row['age'] . "</h2>";
                echo "<h2 class='profile'>User Email: " . $row['email'] . "</h2>";
                echo "<h2 class='profile'>User Address: " . $row['address'] . "</h2>";
            }
        } else {
            echo "No user found with the given ID.";
        }
    }
    ?>
</div>
    