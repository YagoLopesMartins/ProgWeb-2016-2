<?php
    session_start();

    @$login = $_GET['login'];
    @$senha = $_GET['senha'];

    if (isset($_SESSION['start'])){
        $_SESSION['start'] = date('H:i');
        echo "Variaveis de sessão inicializadas";
    }else{
        echo "Variaveis de sessão: <br/>";
        echo "Start: ".$_SESSION['start'];
    }

    if($login === "demo" && $senha ==="demo"){

    }
?>

