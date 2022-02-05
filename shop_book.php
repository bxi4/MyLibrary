<?php

include_once 'connect.php';
$result = mysqli_query($link, "SELECT * FROM add_book");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylee.css">
    <title>SHOPPING - Product</title>
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
    <!-- Notification -->
    <?php if (isset($_GET['message'])): ?>
    <div id="notification">
        <?= $_GET['message'] ?>
    </div>
    <?php  endif ?>
    <a href="index.php" class='signin'"> Sign In Manger </a>
    <div class="header-title">
        <h1>Welcome To Library by <span class="t-highlight"> Mohammed Alwrafi</span></h1>
    </div>
    <ul class="cards">
    <?php foreach ($result->fetch_all(MYSQLI_ASSOC) as $book) { ?>
        <li>
            <a href="buy_book.php?id=<?= $book['id'] ?>" class="card">
                <img src="./img/<?= $book['image'] ?>" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <div class="card__header-text">
                            <h3 class="card__title">Name Book : <?= $book['name_book'] ?></h3>
                            <span class="card__tagline">Book Type  :  <?= $book['book_type'] ?></span>
                            <span class="card__tagline"> Name Author  :  <?= $book['name_author'] ?></span>
                            <span class="card__tagline"> Price  $ <?= $book['price'] ?></span>

                        </div>
                    </div>
                    <p class="card__description"></p>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
    <script>
    let = notifer = document.querySelector('#notification')
    setTimeout(() => {
        notifer.remove();
    }, 3000);
    </script>
</body>

</html>