<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table id INT AUTO_INCREMENT PRIMARY KEY,
         VARCHAR(50) NOT NULL UNIQUE -->
    <table border="1">
        <thead>
            <!-- Complete the table header row -->
            <th>SN</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>EMAIL</th>
            <th>GENGER</th>
            <th>DATE OF BIRTH</th>
        </thead>

        <tbody>
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

// Create a Table
$sql ="SELECT* FROM users ";
$result = $con->query($sql);
if($result->num_rows>0){//looping through result variable and set it values in each rows to row variable
    while($row=$result->fetch_assoc()){
         // Complete code to:
                // Connect to the DB
                // Select all records from users table
                // Display all the selected records
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['date_of_birth']."</td>";
        echo "</tr>";
    }
}


      
        
// Close connection
$con->close();

               
            ?>
        </tbody>
    </table>
</body>
</html>