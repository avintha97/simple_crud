<?php

$conect = new mysqli("localhost","root","",'simple_crud');

if(!$conect){
    echo "conected succesfully";
}else{
    die(mysqli_error($conect));
}

?>