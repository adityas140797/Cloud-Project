<?php
define('user', "aditya123");
define('password', 'aditya123');
define('database', "aditya");
define('host', "database1.c2edunqpjpsv.ap-south-1.rds.amazonaws.com");

function getConnection(){
    
    $con = new mysqli(host, user, password, database);
    
    mysqli_error($con);
    
    return $con;
}

?>