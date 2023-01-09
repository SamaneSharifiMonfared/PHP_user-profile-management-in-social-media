<?php

$sqlConn=new sqlConnection();

$conn = $sqlConn->OpenCon();

$query_users="SELECT * FROM socialmedia.users WHERE deleted = 'N' ;";

$users=$sqlConn->mysql_fetch($conn,$query_users);


