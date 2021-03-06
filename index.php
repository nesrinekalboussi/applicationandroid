<html>
<body>
<?php
define('DBHOST', getenv('OPENSHIFTMYSQLHOST'));
define('DBUSER',getenv('OPENSHIFTMYSQLUSERNAME'));
define('DBPASS',getenv('OPENSHIFTMYSQLPASSWORD'));
define('DBNAME',getenv('OPENSHIFTMYSQLDATABASENAME'));
// Create connection
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE TABLE OS (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(70) NOT NULL,
description VARCHAR(200) NOT NULL,
image VARCHAR(70) NOT NULL 
)";
if (mysqli_query($conn, $sql)) {
    echo "Table OS created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO OS (name, description,image)
VALUES ('iOS', 'système d\'exploitation mobile développé par Apple pour plusieurs de ses appareils', 'ios')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfullyy";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO OS (name,description,image)
VALUES ('android', 'un système d\'exploitation mobile basé sur le noyau Linux et développé actuellement par Google.', 'android')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO OS (name,description,image)
VALUES ('blackberry', 'une ligne de téléphones intelligents, créée et développée par Mike Lazaridis depuis 1999 puis rejoint par Jim Balsillie', 'blackberry')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO OS (name,description,image)
VALUES ('windows phone', 'un système d\'exploitation mobile développé par Microsoft pour succéder à Windows Mobile', 'windows')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
</body>
</html>
