<html>
<body>
nesrine 
<?php
define('DB_HOST', getenv('OPENSHIFTMYSQLHOST'));
define('DB_USER',getenv('OPENSHIFTMYSQLUSERNAME'));
define('DB_PASS',getenv('OPENSHIFTMYSQLPASSWORD'));
define('DB_NAME',getenv('OPENSHIFTMYSQLDATABASENAME'));
// Create connection
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAM);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE TABLE os (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
nbuser VARCHAR(30) NOT NULL,
nbversion VARCHAR(50) NOT NULL,
nbsmart VARCHAR(30) NOT NULL 
)";
if (mysqli_query($conn, $sql)) {
    echo "Table Os created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO os (name, nbuser, nbversion,nbsmart)
VALUES ('Android', '100', '23','100')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfullyy";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, nbuser, nbversion,nbsmart)
VALUES ('iOS', '200', '20','200')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, nbuser, nbversion,nbsmart)
VALUES ('BlackBerry', '70', '21','70')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, nbuser, nbversion,nbsmart)
VALUES ('WindowsPhone', '60', '20','60')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
echo json_encode($output);
?>
</body>
</html>
