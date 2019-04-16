<?php

    

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $conn = mysqli_connect('localhost', 'root', '', 'php');
    $sql = "INSERT INTO php VALUES(NULL, '$name', '$roll', '$phone', '$address')";

    mysqli_query($conn, $sql);
    header('Location: index.php');


 ?>
