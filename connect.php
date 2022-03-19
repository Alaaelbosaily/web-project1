<?php
    $dsn='mysql:host=localhost;dbname=bookstore';
    $dbUserName='root';
    $dbPassword='';
    try{
        $con=new PDO($dsn,$dbUserName,$dbPassword);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }
    catch(PDOException $e){

    }
?>