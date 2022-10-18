
<?php

include('../Api/connection.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$college = $_POST['college'];
$gender = $_POST['gender'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($connection,$sql);
if(!$result){
    echo "Something went Wrong!";
    exit;
}

$row_count = mysqli_num_rows($result);
if($row_count != 0){
    echo "This email id is already registered with us!";
    exit;
}

$sql = "INSERT INTO users(full_name, phone, email, password, college_name, gender) Values ('$name', '$phone', '$email', '$pass', '$college', '$gender')";

$result = mysqli_query($connection, $sql);

if(!$result){
    echo "Error" .mysqli_error($connection);
    echo "Registration Failed";
}

echo "Registration Successfull";
header("Location: ../home.php")

?>