<!-- <html>

<head>
    <title>PHP Starter</title>
</head>

<body>
    <h1>PHP Starter in CodeSandbox</h1>
    <?php phpinfo(); ?>
</body>

</html> -->


<?php


<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query with an ORDER BY clause
$sql = "SELECT id, firstname, lastname FROM users ORDER BY firstname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();



