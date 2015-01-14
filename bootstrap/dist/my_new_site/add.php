<?php
$link = mysqli_connect("localhost",
    "root",
    "allah@03",
    "newsite");

$query="INSERT INTO `newsite`.`signup` (
                                            `name` ,
                                            `email` ,
                                            `password` ,
                                            `gender` ,
                                            `religion` ,
                                            `bday` ,
                                            `nationality`
)
VALUES (
              '".$_POST['name']."',  '".$_POST['email']."',
               '".$_POST['password']."',  '".$_POST['gender']."',  '".$_POST['religion']."',
               '".$_POST['bday']."',  '".$_POST['nationality']."'
);";



mysqli_query($link, $query);

header('location:signup.html');

?>