<?php

if((!isset($_SESSION['usuario'])))
{
    session_destroy();
    header('location:http://localhost/biblioteca/cadastros/usuarios/Login.php');
}else if ($_SESSION['status'] == 0){
    header('location:http://localhost/biblioteca/cadastros/usuarios/Login.php');

}