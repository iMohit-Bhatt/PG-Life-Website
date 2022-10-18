<?php
session_start();
include('../Api/connection.php');

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users Where email = '$email'";

$result = mysqli_query($connection, $sql);

if(!$result){
    echo "Error" .mysqli_error($connection);
}

$row = mysqli_fetch_assoc($result);

if($email == $row['email'] && $pass == $row['password']){
    echo "Login Successfull";
    header("Location: dashboard.php");
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];

}
else{
echo "No Account Found";
}

?>

