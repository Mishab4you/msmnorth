<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
// include(ROOT_PATH . "/app/helpers/validateUser.php");


$table = 'ratings';

$admin_users = selectAll($table);

$errors = array();
$id = '';
$username = '';
// $admin = '';
$email = '';
$phone = '';
$age = '';
// $gender = '';
$optionbox = '';
// $password = '';
// $passwordConf = '';


function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    // $_SESSION['email'] = $user['email'];
    $_SESSION['age'] = $user['age'];
    $_SESSION['phone'] = $user['phone'];
    // $_SESSION['gender'] = $user['gender'];
    $_SESSION['optionbox'] = $user['optionbox'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Welcome';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    } else {
        header('location: ' . BASE_URL . '/cs.php');
    }
    exit();
}

if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
    // $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = 'Admin user created';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/users/index.php'); 
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        }
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        // $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        // $gender = $_POST['gender'];
        $optionbox = $_POST['optionbox'];

        // $password = $_POST['password'];
        // $passwordConf = $_POST['passwordConf'];
    }
}

if (isset($_POST['update-user'])) {
    adminOnly();
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['passwordConf'], $_POST['update-user'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = 'Admin user created';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/users/index.php'); 
        exit();
        
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        // $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        // $gender = $_POST['gender'];
        $optionbox = $_POST['optionbox'];
        // $password = $_POST['password'];
        // $passwordConf = $_POST['passwordConf'];
    }
}


if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    
    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin'];
    $phone = $user['phone'];
    $age = $user['age'];
    $gender = $user['gender'];
    $optionbox = $user['optionbox'];
}


if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user = selectOne($table, ['phone' => $_POST['phone']])) {
            loginUser($user);
        } else {
           array_push($errors, '<font color="red">Wrong Username or Password</font>');
        }
    }

    $username = $_POST['username'];
    $phone = $_POST['phone'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'user deleted';
    $_SESSION['type'] = 'danger';
    header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    exit();
}