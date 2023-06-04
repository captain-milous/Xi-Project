<?php

include_once 'loginManager.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    header('Location: /Xi-Project/login.php?mssg=Neco neni vypneno!');
}
if (SingletonConnection() === null) {
    header('Location: /Xi-Project/login.php?mssg=Problem s databazi!');
}
try {
    login($email, $password);
    header('Location: /Xi-Project/');
} catch(Exception $e) {
    header('Location: /Xi-Project/login.php?mssg=' . $e->getMessage());
}

?>