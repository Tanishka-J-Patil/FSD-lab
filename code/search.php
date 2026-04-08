<?php
include 'db.php';

$name = $_POST['name'];

$result = mysqli_query($conn, 
"SELECT * FROM students WHERE name LIKE '%$name%'");

echo "<h2>Search Results</h2>";

while($row = mysqli_fetch_assoc($result)){
    echo $row['name']." - ".$row['email']." - ".$row['course']."<br>";
}

echo "<br><a href='index.php'>Go Back</a>";
?>