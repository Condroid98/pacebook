<?php

$db_host = getenv("HOST");
$db_user = getenv("USER");
$db_pass = getenv("PASS");
$db_name = getenv("DBNAME");

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
