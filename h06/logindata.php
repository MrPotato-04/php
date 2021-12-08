<?php 
session_start();
$dbhost ="localhost:3306";
$dbuser ="root";
$dbpass ="";
$dbname ="phpschool";
$username = $_POST['username'];
$password = $_POST['password'];

$dbc = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('Could not connect: ' . mysqli_error($con));


$res = $dbc->query("SELECT * FROM login WHERE username='{$_POST['username']}' AND password='{$_POST['password']}'");
$row = $res->fetch_assoc();
if(!$row['username'] || !$row['password']) {
    echo 'Email or password is invalid';
}else {
    $roll = ($row['roll'] === 2) ? "user": "admin";
    echo 'welcome <br>';
    echo "Roll: {$roll}";
    setcookie('roll',$row['roll'], -1, '/');
    echo '<br><a href="admin.php">admin page</a>';
}
?>