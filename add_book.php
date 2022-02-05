<?php
// session_start();
include_once('connect.php');
if (isset($_POST['save'])) {

    // print_r($_FILES);
    $image  = $_FILES['image_book'];
    $rand = random_int(1000000, 9999999);
    $ext = explode('.', $image['name']);
    $file = 'book_' . $rand . '.' . end($ext);
    move_uploaded_file($image['tmp_name'], './img/' . $file);
    $name_book = $_POST['name_book'];
    $book_type = $_POST['book_type'];
    $name_author = $_POST['name_author'];
    $date_book = $_POST['date_book'];
    $price = $_POST['price'];
    $sql = "INSERT INTO add_book(name_book,book_type,name_author,date_book, image,price) VALUES ('$name_book','$book_type','$name_author','$date_book', '$file',$price)";
    if (mysqli_query($link, $sql)) {
        echo "dono insert Book";
    } else {
        echo "Error";
    }
}
// select book type from DB for Option
$get_type = "SELECT book_type FROM book_type";
$gett=mysqli_query($link,$get_type);

// select name author from DB for Option
$get_author = "SELECT name_author FROM add_author";
$gettt=mysqli_query($link,$get_author);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
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
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a class="active" href="add_book.php">Add Book</a></li>
            <li><a href="view_book.php">View Book</a></li>
            <li><a href="add_author.php">Add Author</a></li>
            <li><a href="view_author.php">View Author</a></li>
            <li><a href="book_type.php">Book Type</a></li>
            <li><a href="view_book_type.php">View Book Type</a></li>
            <li><a href="#about">about</a></li>

        </ul>

        <div style="margin-left:25%;padding:1px 16px;height:100vh;">
        <div class="add_items"> 
            <h3>insert Data For Add Book</h3>
            <label for="name"> Name Book :</label>
            <input type="text" name="name_book" id="name" placeholder="name book" required> <br> <br>
            Book Type :
           <select name="book_type">
            <option value="" selected disabled>Select Type...</option>
           <?php while($row = mysqli_fetch_assoc($gett)) { ?>
            <option value = "<?php echo($row['book_type'])?>" ><?php echo($row['book_type']) ?></option>
            <?php } ?>
           </select>
            <br><br>
            Select Author :
            <select name="name_author">
            <option value="" selected disabled>Select Type...</option>
            <?php while($row = mysqli_fetch_assoc($gettt)) { ?>
            <option value = "<?php echo($row['name_author'])?>" ><?php echo($row['name_author']) ?></option>
            <?php } ?>
            </select>
            <br> <br>
            Date Book :
            <input type="date" name="date_book" required> <br> <br>
            Price  :
            <input type="number" name="price" required> <br> <br>
            ... 
            <input type="file" name="image_book" required> <br> <br>
            <input type="submit" style="margin-left: 9%;"  name="save" value="Save Book">
            <input type="reset" name="reser" class="reset">
            </div>
        </div>
        <!-- <div>Want to Leave the Page? <br><a href="logout.php">Logout</a></div> -->
        <script>
            document.querySelector('input[name="name_book"]').addEventListener('input', function() {
                console.log(this.value.length);
                if (this.value.length <= 5 ) {
                    this.classList.add('validate');
                }else {
                    this.classList.remove('validate');
                }
            })
        </script>
</body>

</html>