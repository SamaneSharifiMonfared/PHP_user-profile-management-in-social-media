<?php

$sqlConn=new sqlConnection();

$conn = $sqlConn->OpenCon();

$query_users="SELECT * FROM socialmedia.users;";

$users=$sqlConn->mysql_fetch($conn,$query_users);


//$u=[];


//foreach($users as $user){
//    echo $user[1];
//
//}
