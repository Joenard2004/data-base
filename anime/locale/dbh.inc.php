<?php

$dsn = "m6ysql:host=localhost;dbname=resort";//name of the db
$dbusername = "root"; //db username
$dbpassword = "";//db password

try {
    
    $pdo = new PDO($dsn, $dbusername, $dbpassword); //line to actually connect to db
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//error message
} catch (PDOException $e) { //will catch that error and will show
    echo "Connection failed: " . $e->getMessage();//this here 
}

//we didnt put a ?-> here cause its a separate file 