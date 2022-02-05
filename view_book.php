<?php
include_once 'connect.php';
$result = mysqli_query($link, "SELECT * FROM add_book");
?>
<!DOCTYPE html>
<html>

<head>
  <title> Retrive Book</title>
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
  <form action="" method="post">
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
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div style="margin-left:25%;padding:1px 16px;height:100vh;">
      <div class="center-table">
      <h1>View Book</h1>
        <table class="th-view">
          <tr class="tr-one">
            <td>ID</td>
            <td>Name Book</td>
            <td>Book Type</td>
            <td>Name Author</td>
            <td>Date Book</td>
            <td>Price</td>
            <td>Edit</td>
          </tr>
          <?php
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["name_book"]; ?></td>
              <td><?php echo $row["book_type"]; ?></td>
              <td><?php echo $row["name_author"]; ?></td>
              <td><?php echo $row["date_book"]; ?></td>
              <td><?php echo $row["price"]; ?></td>
              <td><a href="edit_book.php?id=<?php echo $row["id"]; ?>" style="color: white; background-color:#9470a5">Update</a></td>
            </tr>
          <?php
            $i++;
          }
          ?>
        </table>
      </div>
      <?php
    } else {
      echo "No result found";
    }
      ?>
      </div>
</body>

</html>