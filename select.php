

<?php
define('DBHOST', getenv('OPENSHIFTMYSQLHOST'));
define('DBUSER',getenv('OPENSHIFTMYSQLUSERNAME'));
define('DBPASS',getenv('OPENSHIFTMYSQLPASSWORD'));
define('DBNAME',getenv('OPENSHIFTMYSQLDATABASENAME'));
// Create connection
$conn = mysqli_connect(DBHOST,DBUSER, DBPASS,DBNAME);
$sql = "SELECT * FROM Os where name like '".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
}
echo json_encode($row);
mysqli_close($conn);
?>
 
