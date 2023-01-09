<?php
function OpenCon()
{
//    Mysql confiquration -> will need to go to the confiqure file if I get the time :D
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'sami1net';
    $db =  'socialmedia';
//connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}
?>