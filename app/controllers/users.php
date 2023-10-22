<?php
include"app/database/db.php";

$isSubmit = false;
$errorMessage = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $pass = trim($_POST['pass-second']);
    //$pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);
    $admin = 0;

    if($login === '' || $pass === '' || $email === 0){
        $errorMessage = 'Не все поля заполнены';
    }else{
        $post = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $pass,
        ];
        // $id = insert('users', $post);
        $isSubmit = true;
        tt($post);
        // echo $id;
    }
}
?>