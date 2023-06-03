<?php
include_once 'loginManager.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    header('Location: /Xi-Project/');
}
if (SingletonConnection() === null) {
    header('Location: /Xi-Project/');
}
try {
    login($email, $password);
    header('Location: /Xi-Project/?mssg=Uspesne prihlasen');
} catch(Exception $e) {
    header('Location: /Xi-Project/login.php?mssg=' . $e->getMessage());
}

?>