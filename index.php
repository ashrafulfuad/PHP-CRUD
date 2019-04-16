<?php

        $conn = mysqli_connect('localhost', 'root', '', 'php');
        $sql = "SELECT * FROM php";
        $result = mysqli_query($conn, $sql);

 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
    <br><br><br><br>
    <div class="row">
      <div class="col-md-4">
          <a href="insert.php" class="btn btn-sm btn-info">Add Student</a>
      </div>
      <div class="col-md-8">
          <table class="table">
            <thead>
              <th>Id</th>
              <th>Name</th>
              <th>Roll</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php
                  while ($row = mysqli_fetch_assoc($result)) {
               ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['roll']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                  <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">View</a>
                  <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-secondary">Edit</a>
                  <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are You Sure..?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
              <?php
              }
               ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
