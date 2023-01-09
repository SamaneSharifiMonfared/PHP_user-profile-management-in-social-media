<?php

include_once "../functions/connection.php";
include_once "../functions/queries.php";
include_once "../assets/header.php";

?>
<body>

<?php

include_once "../inc/navigationbar.php";



$q="UPDATE `socialmedia`.`users` SET `deleted` = 'Y' WHERE (`id` = '7');";

if ($conn->query($q) === TRUE) {
    echo "Profile updated successfully";

} else {
    echo "Error updating record: " . $conn->error;
}

$sqlConn->CloseCon($conn);


echo "your profile is deleted!";
echo "bye";
//
//header("Location: ../index.php");
//exit();

?>


