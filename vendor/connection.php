<?php
$user = "root";
$pass = "12345";
try {
    $connect = new PDO('mysql:host=localhost;dbname=science', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
