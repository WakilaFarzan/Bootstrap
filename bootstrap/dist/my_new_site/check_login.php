



<?php

//print_r($_SERVER['REQUEST_METHOD']);

session_start();

if($_SERVER['REQUEST_METHOD'] == "GET")
{
    header("location:sign_in.php");
}

if(isset($_POST['email']) && empty($_POST['email'])) {
    $_SESSION['msgname'] = "Email is Required";
    header('location:sign_in.php');
}

if(isset($_POST['password']) && empty($_POST['password'])){
    $_SESSION['msgpass'] = "Password is Required";
    header('location:sign_in.php');
}




$email = $_POST['email'];
$password = $_POST['password'];


//exit;

$link = mysqli_connect("localhost", "root", "allah@03", "project");

$query = "SELECT * FROM registration WHERE `email` = '$email' AND `password` = '$password'";
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
    $_SESSION['firstname']=$row['firstname'];
    $_SESSION['lastname']=$row['lastname'];
    $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['password'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['bday']=$row['bday'];
    $_SESSION['hobby']=$row['hobby'];
    $_SESSION['city']=$row['city'];
    $_SESSION['comment']=$row['comment'];

    header('location: dashboard1.php');

}

else
{
    //(Redirect to the Login page with a Message)
    $_SESSION['msg'] = "Invalid Email or Password.";
    header('location:sign_in.php');
}

?>