<?php


class sqlConnection{

    function OpenCon()
    {
//    Mysql configuration -> will need to go to the configure file if I get the time :D
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '*********';
        $db =  'socialmedia';
//connection
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

        return $conn;
    }

    function CloseCon($conn)
    {
        $conn -> close();
    }


// Methods
    function mysql_fetch($conn,$query)
    {
        $rows=[];
        $result = $conn->query($query);

        //Fetching all the rows of the result
        $rows = mysqli_fetch_all($result);

        return $rows;

    }


}



?>
