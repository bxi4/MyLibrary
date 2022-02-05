<?php
// include_once('connect.php');

session_start();
if (isset($_POST['save'])) {
    extract($_POST);
    include 'connect.php';
    $sql = mysqli_query($link, "SELECT * FROM users where username='$username' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["email"] = $row['email'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];
        header("Location: home.php");
    } else {
        echo "Invalid Username and Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<style>
    body {
        background-image: url(./img/logo.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        color: #EFDFDF;
    }
</style>

<body>
    <form action="<?php ($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div>
            <h3>Enter Your Username And Password To Login</h3>
            <p for="username">username : </p>
            <input type="text" name="username" placeholder="username" required> 
            <p>password : </p>
            <input type="password" name="password" placeholder="password" required>
            <br>
            <br>
            <input type="submit" class="btn" name="save" value="Sign in ">
            <input type="reset" class="btn" name="reset" value="Reset">
            <p>if you dont have account !</p>
            <a href="signup.php" class="signin"> Sign up </a>
        </div>
    </form>

</body>

</html>