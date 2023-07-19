<?php
    $server = 'localhost'; // 127.0.0.1
    $username = 'root';
    $password = '';
    $db = 'csc309';

    // Open a new connection
    $con = new mysqli($server, $username, $password, $db);

    // Check connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }
 //query
 $sql="DELETE FROM users WHERE id=3";
 $result=$con->query($sql);
 if($result===true){
    echo 'record deleted sucessfully';
 }else{
    echo 'Error deleting recor:'.$con->error;
 }
 //close connection
 $con->close();
 ?>