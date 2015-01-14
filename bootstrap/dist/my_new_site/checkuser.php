



<?php

//print_r($_SERVER['REQUEST_METHOD']);

session_start();

if($_SERVER['REQUEST_METHOD'] == "GET")
{
    header("location:login.php");
}

if(isset($_POST['name']) && empty($_POST['name'])) {
    $_SESSION['msgname'] = "Username is Required";
    header('location:login.php');
}

if(isset($_POST['password']) && empty($_POST['password'])){
    $_SESSION['msgpass'] = "Password is Required";
    header('location:login.php');
}




$name = $_POST['name'];
//echo $username;
$password = $_POST['password'];
//echo $password;

//exit;

$link = mysqli_connect("localhost", "root", "allah@03", "newsite");

$query = "SELECT * FROM signup WHERE `name` = '$name' AND `password` = '$password'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);


//var_dump($row);
//var_dump($row['username']);
//var_dump($row['password']);
//var_dump($row['email']);
//exit;

if($row)
{
    //(SEND Data to the SESSION and GO to The Dashboard)

    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['password'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['religion']=$row['religion'];
    $_SESSION['bday']=$row['bday'];
    $_SESSION['nationality']=$row['nationality'];

    header('location: dashboard.php');

}

else
{
    //(Redirect to the Login page with a Message)
    $_SESSION['msg'] = "Invalid Username or Password.";
    header('location:login.php');
}

?>