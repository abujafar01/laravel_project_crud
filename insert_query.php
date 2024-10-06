<?php

include 'db_connect.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$about_your_self = $_POST['about_your_self'];
$fathers_name = $_POST['fathers_name'];
$mothers_name = $_POST['mothers_name'];
$dob = $_POST['dob'];


$insert_query = "INSERT INTO `student_data`(`id`, `name`, `phone`, `email`, `about_your_self`, `fathers_name`, `mothers_name`, `dob`) VALUES ('NULL','$name ','$phone','$email','$about_your_self ','$fathers_name','$mothers_name','$dob')";



if(mysqli_query($db_connect, $insert_query)){
    header("Location: students_data.php");
}else{
  echo "something is wrong";
}

// echo $name;
// echo "<br>";

// echo $phone;
// echo "<br>";

// echo $email;
// echo "<br>";

// echo $about_your_self;
// echo "<br>";

// echo $fathers_name;
// echo "<br>";

// echo $mothers_name;
// echo "<br>";


// echo $dob;