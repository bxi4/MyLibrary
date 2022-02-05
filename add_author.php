<?php
// session_start();
include_once('connect.php');
if (isset($_POST['save'])) {
    $name_author = $_POST['name_author'];
    $date_author = $_POST['date_author'];
    $book_type = $_POST['book_type'];

    $sql = "INSERT INTO add_author(name_author,book_type,date_author) VALUES ('$name_author','$book_type','$date_author')";
    if (mysqli_query($link, $sql)) {
        echo "dono insert Author";
    } else {
        echo "Error";
    }
}
// select book type from DB for Option
$get_type = "SELECT book_type FROM book_type";
$gett=mysqli_query($link,$get_type);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Author</title>
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
            <li><a class="active" href="add_author.php">Add Author</a></li>
            <li><a href="view_author.php">View Author</a></li>
            <li><a href="book_type.php">Book Type</a></li>
            <li><a href="view_book_type.php">View Book Type</a></li>
            <li><a href="#about">about</a></li>
        </ul>

        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
            <h3>insert Data For Add Author</h3>
            Name Author :
            <input type="text" name="name_author" placeholder="name Author" required> <br> <br>
            Book Type :
            <select name="book_type">
            <option value="" selected disabled>Select Type...</option>
                <?php while ($row = mysqli_fetch_assoc($gett)) { ?>
                 <option value = "<?php echo($row['book_type'])?>" ><?php echo($row['book_type']) ?></option>
                 <?php }?>
                
            </select>
            <br> <br>
            Date of birth Author :
            <input type="date" name="date_author" required> <br> <br>
            <input type="submit" style="margin-left: 9%;" name="save" value="Save Author">
            <input type="reset" name="reser" class="reset">




        </div>


        <!-- <div>Want to Leave the Page? <br><a href="logout.php">Logout</a></div> -->
</body>

</html>