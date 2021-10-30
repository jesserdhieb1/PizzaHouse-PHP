<?php


//connect to a database
$conn = mysqli_connect('localhost','jesser','test1234','ninja_pizza');
//check connection
if(!$conn){
    echo 'Connection error : '.mysqli_connect_error();
}



?>