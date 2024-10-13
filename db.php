<?php

$host= "localhost";
$user= "root";
$password= "";
$db= "auth";

$conn=new mysqli($host,$user, $password, $db );

if ($conn->connect_error){
    die("connection_failed :" .$conn->connect_error);

}else{
    echo "";
}

?>