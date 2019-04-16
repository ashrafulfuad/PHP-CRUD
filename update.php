<?php

    $id = $_GET['id'];

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $conn = mysqli_connect('localhost', 'root', '', 'php');
    $sql = "UPDATE php SET name='$name', roll='$roll', phone='$phone', address='$address' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  header("Location: view.php?id=" . $id);
}else {
  echo "Not Updated";
}




 ?>
