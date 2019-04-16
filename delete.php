<?php



        $id = $_GET['id'];

        $conn = mysqli_connect('localhost', 'root', '', 'php');
        $sql = "DELETE FROM php WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
          header("Location: index.php");
        }else {
          echo "Not Deleted";
        }






 ?>
