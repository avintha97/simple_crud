<?php

$con = new mysqli("localhost","root","avintha97",'simple_crud');

if($con){
    echo "conected succesfully";
}else{
    die(mysqli_error($con));
}

?>