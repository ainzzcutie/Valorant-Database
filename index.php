<?php include 'DBConnector.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant Account Creation</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.cdnfonts.com/css/valorant" rel="stylesheet">
</head>
<body>
    <div id="container">
        <h1>Valorant Account Creation</h1>
        <form method="POST" action="register.php">
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Enter User Name" required><br>
            <label for="age">Age: </label>
            <input type="number" name="age" placeholder="Enter User Age" min=0 required><br>
            <label for="email">Email: </label>
            <input type="email" name="email" placeholder="Enter User Email" required> <br>
            <label for="address">Address: </label>
            <input type="text" name="address" placeholder="Enter User Address" required><br>

            <h2>Choose an image:</h2>
            <label for="image1"><img src="images/chamber.png"></label>
            <input type="radio" id="image1" name="image" value="images/chamber.png" required>
            <label for="image2"><img src="images/reyna.png"></label>
            <input type="radio" id="image2" name="image" value="images/reyna.png" required>
            <label for="image3"><img src="images/jett.png"></label>
            <input type="radio" id="image3" name="image" value="images/jett.png" required>
            <label for="image4"><img src="images/killjoy.png"></label>
            <input type="radio" id="image4" name="image" value="images/killjoy.png" required>
            <input type="submit" name="submit">
        </form>
        <form method="POST" action="display.php">
            <input type="number" name="id" placeholder="Enter User ID" min=0>
            <input type="submit" name="display" value="Display User Data">
        </form>
        <form method="POST" action="update.php">
            <input type="number" name="id" placeholder="Enter User ID" min=0>
            <input type="submit" name="update" value="Update User Data">
        </form>
        <form method="POST" action="delete.php">
            <input type="number" name="id" placeholder="Enter User ID" min=0>
            <input type="submit" name="delete" value="Delete User Data">
        </form> 
    </div>
</body>
</html>

