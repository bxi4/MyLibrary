<?php
include_once('connect.php');
if (isset($_POST['save'])) {
    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(email,username,password) VALUES ('$email','$username','$password')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully !";
        header("Location: index.php");
    } else {
        echo "Error Save : " . $sql . "" . mysqli_error($link);
    }

    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Signup</title>
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
            <h3>Enter Your Email And Username And Password To SignUp</h3>
            <p>Email : </p>
            <input type="Email" name="email" placeholder="Email" required>
            <p>username : </p>
            <input type="text" name="username" placeholder="username" required>
            <p>password : </p>
            <input type="password" name="password" placeholder="password" required>
            <br>
            <br>
            <input type="submit" class="btn" name="save" value="Sign Up">
            <input type="reset" class="btn" name="reset" value="Reset">
            <p>if you have account !</p>
            <a href="index.php" class="signin"> Sign in </a>
        </div>
    </form>
</body>

</html>