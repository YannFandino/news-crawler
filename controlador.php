<?php
	require 'class/ConexionDB.php';
	require 'class/User.php';
	session_start();
	
	$conexion = new ConexionDB();
	$action = isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '');
	
	switch ($action) {
        case 'registro':
            $username = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $isRegistered = $conexion->registerUser($email,$password,$username);

            if ($isRegistered) {
                $_SESSION['user'] = $isRegistered;
                header("Location: channel.php");
            }
            break;

        case 'login':
            $email = $_POST['email'];
            $password = $_POST['password'];

            $isLogged = $conexion->loginUser($email, $password);
            if ($isLogged == "Error1" || $isLogged == "Error2") {
                $_SESSION["error_login"] = $isLogged;
                header("Location: index.php");
            } else {
                unset($_SESSION['error_login']);

                // Obtener lista RSS personalizada del usuario
                $listaRSS = $conexion->getRSS($isLogged->getId());
                $isLogged->setListaRSS($listaRSS);
                print_r($listaRSS);

                $_SESSION["user"] = $isLogged;
                header("Location: channel.php");
            }
            break;

        case 'salir':
            session_destroy();
            header('Location: index.php');
            break;
    }
?>