<?php
include_once 'connect.php';
if (count($_POST) > 0) {
    mysqli_query($link, "UPDATE book_type set id='" . $_POST['id'] . "',book_type='".$_POST['book_type']."' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($link, "SELECT * FROM book_type WHERE id='".$_GET['id']."'");
$row = mysqli_fetch_array($result);

if(isset($_POST['remove'])) {
    mysqli_query($link, "DELETE FROM `book_type` WHERE `id` ='". $_POST['id']."'"); 
    header("Location: view_book_type.php");
}
?>
<html>

<head>
    <title>Edit Book Type</title>
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
      <li><a href="view_book.php">View Book</a></li>
      <li><a href="add_author.php">Add Author</a></li>
      <li><a href="view_author.php">View Author</a></li>
      <li><a href="book_type.php">Book Type</a></li>
      <li><a class="active" href="view_book_type.php">View Book Type</a></li>
      <li><a href="#about">about</a></li>
    </ul>

    <div style="margin-left:25%;padding:1px 16px;height:100vh;">
    <form method="post" action="">
        <div><?php if (isset($message)) {
                    echo $message;
                } ?>
        </div>
        <h3>Edit Book</h3>
        ID: 
        <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
        <input type="text" name="id" value="<?php echo $row['id']; ?>">
        <br> <br>
        Book Type 
        <input type="text" name="book_type" class="txtField" value="<?php echo $row['book_type']; ?>">
        <br> <br>
        <input type="submit" class="btn" name="submit" value="Submit" class="buttom"> 

        <input type="submit" class="btn-remove" name="remove" value="Delete">

    </form>
    </div>
    
</body>

</html>