<?php
include_once 'connect.php';
if (count($_POST) > 0) {
    mysqli_query($link, "UPDATE add_book set id='" . $_POST['id'] . "', name_book='" . $_POST['name_book'] . "', book_type='" . $_POST['book_type'] . "', name_author='" . $_POST['name_author'] . "' ,date_book='" . $_POST['date_book'] . "',price='" . $_POST['price'] ."' WHERE id='" . $_POST['id'] . "'");
    $message = "Done Update Successfully";
}
$result = mysqli_query($link, "SELECT * FROM add_book WHERE id='".$_GET['id']."'");
$row = mysqli_fetch_array($result);

if(isset($_POST['remove'])) {
  mysqli_query($link, "DELETE FROM `add_book` WHERE `id` ='". $_POST['id']."'"); 
  header("Location: view_book.php");
}
?>
<html>

<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    body {
      background-image: url(./img/logo.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      color: #EFDFDF;

    }
  </style>
</head>

<body>
<ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="add_book.php">Add Book</a></li>
      <li><a class="active" href="view_book.php">View Book</a></li>
      <li><a href="add_author.php">Add Author</a></li>
      <li><a href="view_author.php">View Author</a></li>
      <li><a href="book_type.php">Book Type</a></li>
      <li><a href="view_book_type.php">View Book Type</a></li>
      <li><a href="#about">about</a></li>
    </ul>

    <div style="margin-left:25%;padding:1px 16px;height:100vh;">
    <form method="post" action="">
        <div><?php if (isset($_POST['submit'])) {
                    echo $message;
                } ?>
        </div>
        <h3>Edit Book</h3>
        ID: 
        <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
        <input type="text" name="id" value="<?php echo $row['id']; ?>">
        <br> <br>
        Name Book: 
        <input type="text" name="name_book" class="txtField" value="<?php echo $row['name_book']; ?>">
        <br> <br>
        Book Type 
        <input type="text" name="book_type" class="txtField" value="<?php echo $row['book_type']; ?>">
        <br> <br>
        Name Author:
        <input type="text" name="name_author" class="txtField" value="<?php echo $row['name_author']; ?>">
        <br> <br>
        Date Book:
        <input type="date" name="date_book" class="txtField" value="<?php echo $row['date_book']; ?>">
        <br> <br>
        Price: 
        <input type="number" name="price" class="txtField" value="<?php echo $row['price']; ?>">
        <br> <br>
        <input type="submit" class="btn" name="submit" value="Submit" class="buttom"> 

        <input type="submit" class="btn-remove" name="remove" value="Delete ">

    </form>
    </div>
    
</body>

</html>