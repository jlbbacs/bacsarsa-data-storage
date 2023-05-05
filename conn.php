<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bacsarsa";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die('connstion failed' . mysqli_connect_error());
}
else{
    // echo "bacs will be soon successful";
}



?>