<?php
session_start();
require_once 'vendor/connection.php';
//**@var $connect */
$login = $_POST['login'];
$password = $_POST['password'];
$sql = 'SELECT * FROM `users` WHERE user_login=? AND user_password=?';
$statement = $connect->prepare(query: $sql);
$statement->execute([$login, $password]);
$res=$statement->fetchAll(PDO::FETCH_ASSOC);
echo $res;
if (count($res) == 1) {
    $_SESSION['user'] = [
        "user_id" => $res['0']['user_id'],
        "user_login" => $res['0']['user_login'],
        "user_name" => $res['0']['user_name'],
        "user_role_id" => $res['0']['user_role_id'],
        "user_task_id" => $res['0']['task_id'],
        ];
    header('Location: vendor/application.php');
} else {
    $_SESSION['message'] = 'Authorization failed';
    header('Location: index.php');
}

