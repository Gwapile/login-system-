
<?php
$gwapile =mysqli_connect("localhost","root","","login_form");
echo "gwapile successfully";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "insert into gwapile29 (username,password) value ('$username','$password')";
    $successfuly = mysqli_query($gwapile,$query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deg</title>
    <link rel="stylesheet" href="deg.css">
</head>
<body>
    <div class="box">
        <form method="post">
        <h2>Sign in</h2>
        <input type="username" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Login">
        <div class="group">
            <a href="#">Forgot Password</a>
            <a href="#">Sign up</a>
        </div>
    </form>
    </div>
</body>
</html>
