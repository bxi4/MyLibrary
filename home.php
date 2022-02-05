<?php
session_start();
include_once('connect.php');
$username = @$_SESSION["username"]  or die ("please Login Fisrt ");
$sql = mysqli_query($link, "SELECT * FROM users where username='$username' ");
$row  = mysqli_fetch_array($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<style>
    body {
        background-image: url(./img/logo.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        color: #EFDFDF;
        overflow: hidden;

    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 25%;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
    }

    li a.active {
        background-color: #04AA6D;
        color: white;
    }

    li a:hover:not(.active) {
        background-color: #555;
        color: white;
    }
</style>

<body>
    <form action="" method="post">
        <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="add_book.php">Add Book</a></li>
            <li><a href="view_book.php">View Book</a></li>
            <li><a href="add_author.php">Add Author</a></li>
            <li><a href="view_author.php">View Author</a></li>
            <li><a href="book_type.php">Book Type</a></li>
            <li><a href="view_book_type.php">View Book Type</a></li>
            <li><a href="#about">about</a></li>
        </ul>

        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
            <h2>Welcome To Your Library</h2>
            <h3>Welcome To Your Library Broswer Addresses In Your HomePage</h3>
            <p>Notic in The Addition of Books,Add the Titile of The Book With the Authors,Type Of The Book And Book date, Add To the shopping Departments  and There is a 25% Reduction in the Products Currently.</p>
            <p>Also notice We offer you the shape clearly and simplicably to be treated in it and not difficult to use this library for you and thank you (for example if you want to view books).</p>
            <a href="shop_book.php" style="	background-color: #04AA6D;
    font-family: 'Source Sans Pro', sans-serif;
    color: white;
    font-size: 18px;
    padding: 6px 15px;
    margin-top: 4px;
    margin-right: 10px;
    display: block;
    float: left;
    border-radius: 5px;" >Show Shop</a>

        </div>


        <!-- <div>Want to Leave the Page? <br><a href="logout.php">Logout</a></div> -->
</body>

</html>