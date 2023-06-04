<?php

require_once("loginManager.php");

$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

if($password1 != $password2) {
    header('Location: /Xi-Project/register.php?mssg=Hesla se neshoduji!');
}
if (empty($email) || empty($password1) || empty($fname) || empty($lname)) {
    header('Location: /Xi-Project/register.php?mssg=Neco jsi nevyplnil!');
}
if (SingletonConnection() === null) {
    header('Location: /Xi-Project/register.php?mssg=Error 500');
}

try {
    register($email, $password1, $fname, $lname);
    header('Location: /Xi-Project/?mssg=Jsi uspesne zaregistrovany!');
} catch(Exception $e) {
    header('Location: /Xi-Project/?mssg=' . $e->getMessage());
}

?>