<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_name";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(($handle     =   fopen("https://docs.google.com/spreadsheets/d/e/....pub?gid=....&single=true&output=csv", "r")) !== FALSE){
    while(($row =   fgetcsv($handle)) !== FALSE){
        $conn->query(
            'INSERT INTO `table`(`table.columnA`, `table.columnB`, `table.columnC`, `table.columnD`, `table.columnE`) 
            VALUES ("'.$row[0].'","'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'")');
    }
    fclose($handle);
}

?>
