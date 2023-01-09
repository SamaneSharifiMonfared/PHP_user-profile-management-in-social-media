<?php
include_once "../functions/connection.php";
include_once "../functions/queries.php";
include_once "../assets/header.php";


if(isset($_POST["submit"])){

    $id=$_POST["submit"];

   $q="UPDATE `socialmedia`.`users` SET `following` = 'no' WHERE (`id` = '$id');";

    if ($conn->query($q) === TRUE) {
        echo "Profile updated successfully";

    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sqlConn->CloseCon($conn);

    header("Location: ../index.php");
    exit();

}
?>