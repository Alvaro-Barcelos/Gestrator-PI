<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id_login'])){
        header("Location: semLogin.html");
        if( $_SESSION['tipo_conta'] !== 'surpervisor'){
            header("Location: restricao.html");
        }
    }

?>