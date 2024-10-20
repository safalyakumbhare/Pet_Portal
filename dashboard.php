<?php
include("common/connection.php");
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit;
}

$username = $_SESSION['username'];

$sql = "SELECT role_id FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$role_id = $row['role_id'];

if ($role_id == 1) {
    echo "Welcome Admin";
} elseif ($role_id == 2) {

    echo "Welcome " . $_SESSION['username'];

}



?>

<a href="common/logout.php">Logout</a>