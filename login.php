<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$usernameErr = $passwordErr= "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
    } else {
    $username = test_input($_POST["username"]);
    // mengecek apakah username mengandung huruf dan spasi
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
        $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
    } else {
    $password = test_input($_POST["password"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<div class="hai"
    style="
    text-align: center;
    margin: 4em; 
    background-color: azure;
    width: 400px;
    height: auto; 
    border-radius: 15px;
    padding: 5px;
    position: absolute;
    font-size: 2rem;
"
>
    <?php echo "Welcome, " . $username . "!"; ?>
    <br>
    <br>
    <img src="robot.png" width="100px;">
</div>

</body>
</html>