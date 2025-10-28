<?php
	$peticionAjax=true;
	require_once "../config/APP.php";

    // petición a usuario
    if(isset($_POST['nombre_reg']) || isset($_POST['usuario-id-up']) || isset($_POST['usuario-id-del'])){ 
        /*--------- Instancia al controlador ---------*/
        require_once "../controller/userController.php";
        $userController = new userController();

       
    }else {
        session_start(['name'=>APP_NAME]);
        session_unset();
        session_destroy();
        header("Location: ".APP_URL."login/");
        exit();
    }