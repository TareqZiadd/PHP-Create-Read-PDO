<?php
include 'includes/class-autoload.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

$testObj= new Test();
$testObj->getAllUsers(); 

$testObj->addUser("rami","ziad","2022-12-08");
?>



</body>
</html>
