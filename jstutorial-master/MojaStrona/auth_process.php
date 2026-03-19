<?php

session_start();
require_once 'config.php';

if (isset($_POST['register_btn'])){//jeśli kliknięto register
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $check_email = $conn->query("SELECT email FROM users WHERE email = '$email'");//zapytanie sql sprawdzające czy istnieje email 
    if ($check_email->num_rows > 0){//jeśli istnieje email ma zwrócić 0 i zwrócić komunikat o istniejącym emailu
        $_SESSION['alerts'][] = [
            'type' => 'error',
            'message' => 'Email is alredy registred!'
        ];
        $_SESSION['active_form'] = 'register';
    }else{
        $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");//jeśli email nie istnieje, rejestracja idzie dalej
        $_SESSION['alerts'][] = [
            'type' => 'success',
            'message' => 'Registration successful'
        ];
        $_SESSION['active_form'] = 'login';
    }

    header('Location: index.php');
    exit();
}

if (isset($_POST['login_btn'])){//jeśli nastąpi kliknięcie w login...
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");//zaputanie sql wyszukujące wszystko o email ze zmiennej email
    $user = $result->num_rows > 0 ? $result->fetch_assoc() : null;

    if ($user && password_verify($password, $user['password'])){//jeśli email nie istnieje - zmienna result zwraca 0, to ma zalogować
        $_SESSION['name'] = $user['name'];
        $_SESSION['alerts'][] = [
            'type' => 'success',
            'message' => 'Login successful'
        ];
    }else{
        $_SESSION['alerts'][] = [
            'type' => 'error',
            'message' => 'Incorect email or password!'//w przeciwnym razie ma zwrócić komunikat o błędnym logowaniu
        ];
        $_SESSION['activate_form'] = 'login';
    }

    header('Location: index.php');
    exit();
}
?>