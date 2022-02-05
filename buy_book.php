<?php 

include_once 'connect.php';

if (! isset($_GET['id'])) {
    header('location: shop_book.php');
    exit;
}
$id = (int)$_GET['id'];

$result = mysqli_query($link, "SELECT * FROM add_book WHERE id = $id");

$book = $result->fetch_assoc();

if(isset($_POST['submit'])){
    $name = $_POST['fname'] . ' ' . $_POST['lname'];
    $email = $_POST['email'];
    $book_id = $id;
    $country = $_POST['country'];
    $result = mysqli_query($link, "INSERT INTO invoice (`name`, `email`, `book_id`, `country`) VALUES ('$name', '$email', $book_id, '$country')");
    header('location: shop_book.php?message=Successfuly Book Paid');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylee.css">
    <title>SHOPPING - Payment</title>
</head>
<style>
    body {
      background-image: url(./img/logo.jpg) !important;
      background: fixed;
      background-size: cover;
      color: #EFDFDF;

    }
  </style>
<body class="body">
    <div class="n-c-center">
    </div>
    <div class="container">
        <div class="col-6">
            <div class="form shadow" style="margin-bottom: 10px;">
                <h1 id="name-product"><?= $book['name_book'] ?></h1>
            </div>
            <div class="form" style="margin-bottom: 10px;">
                <table>
                    <tr>
                        <td><h2>Price</h2></td>
                        <td><h2 id="price"></h2></td>
                    </tr>
                    <tr class="j-center">
                        <td>
                        <img src="img/<?= $book['image'] ?>" width="200" alt="<?= $book['name_book'] ?>">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form">

                <form id="form-payment" method="POST" action="<?= $_SERVER['PHP_SELF']?>?id=<?= $id ?>">
                    <div class="row">
                        <input class="w-50" type="text" id="f-name" name="fname" placeholder="first name" autofocus>
                        <input class="w-50" type="text" id="l-name" name="lname" placeholder="Last name">
                    </div>
                    <input type="email" id="Email" placeholder="Email" name="email">
                    <input type="text" id="Country" placeholder="Country" name="country">
                    <div class="j-center">
                        <button type="submit" name="submit" style="width: 40%;">Pay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
</body>

</html>