<?php

include 'connect.php';

extract($_POST);

if(isset($_POST['Sname']) && isset($_POST['Email']) && isset($_POST['Stel'])  && isset($_POST['Saddress'])){

    $sql = 'INSERT INTO  user_inormation (name,email,telephone,address) VALUES ("$Sname","$Email","$Stel","$Saddress")';
    $result=mysqli_query($conect,$sql);

  
}





?>