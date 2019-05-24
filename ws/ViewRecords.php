<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "ws";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT student_id, first_name, last_name, birth_date FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Birth Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["student_id"]. "</td><td>" . $row["first_name"]. "</td><td>". $row["last_name"]. "</td><td>". $row["birth_date"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
