<?php
// session_start();
include_once('connect.php');
if (isset($_POST['save'])) {
    $book_type = $_POST['book_type'];
    $sql = "INSERT INTO book_type(book_type) VALUES ('$book_type')";
    if (mysqli_query($link, $sql)) {
        echo "dono insert Book Type";
    } else {
        echo "Error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Type</title>
    <link rel="stylesheet" href="./css/style.css">
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
    <form action="" method="post">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="add_book.php">Add Book</a></li>
            <li><a href="view_book.php">View Book</a></li>
            <li><a href="add_author.php">Add Author</a></li>
            <li><a href="view_author.php">View Author</a></li>
            <li><a class="active" href="book_type.php">Book Type</a></li>
            <li><a href="view_book_type.php">View Book Type</a></li>
            <li><a href="#about">about</a></li>
        </ul>

        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
            <h3>insert Data For Add Book Type</h3>
            Book Type :
            <input type="text" name="book_type" placeholder="book type" required> <br> <br>
            <input type="submit" style="margin-left: 13%;" name="save" value="Save Type">
            <input type="reset" name="reser" class="reset">
        </div>

        <!-- <div>Want to Leave the Page? <br><a href="logout.php">Logout</a></div> -->
</body>
</html>