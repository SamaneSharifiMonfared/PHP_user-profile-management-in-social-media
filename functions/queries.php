<?php

$sqlConn=new sqlConnection();

$conn = $sqlConn->OpenCon();

$query_users="SELECT * FROM socialmedia.users;";

$users=$sqlConn->mysql_fetch($conn,$query_users);

//
foreach($users as $user){
//    echo $user[1];
    $images[]=$user[5];

}
//print_r($images);