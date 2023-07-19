
<?php
    $server = 'localhost'; // 127.0.0.1
    $username = 'root';
    $password = '';
    $db = 'csc309';// creating database

    // Open a new connection
    $con = new mysqli($server, $username, $password, $db);

    // Check connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    // Create a Table and inserting  values to it
    $sql = "INSERT INTO users (firstname, lastname, email) 
    VALUES ('Nwafor', 'Benjamin', 'benjaminn@gmail.com')";

    $result = $con->query($sql);//allowing access to the database

    if ($result === true) {
        echo 'Record inserted successfully';
    } else {
        echo 'Error inserting record: ' . $con->error;
    }

    // Close connection
    $con->close();
?>