<?php

class Dbh {


public function connect(){

    $dsn = 'mysql:dbname=oopphp16;host=127.0.0.1';
    $user = 'root';
    $password = '';
    
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo 'true';
    return $pdo;
}
}






