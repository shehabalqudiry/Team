<?php

$dns = 'mysql:host=localhost;dbname=id11358462_shop';
$user = 'id11358462_root';
$pass = '?tiCu(KEd~v|2dc$';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $con = new PDO($dns, $user, $pass, $options);
    $con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Failed To Connect ' . $e->getMessage();
}