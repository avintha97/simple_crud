<?php

$conect = new mysqli("localhost","root","avintha97",'simple_crud');

if($conect){
    echo "conected succesfully";
}else{
    die(mysqli_error($conect));
}

?>