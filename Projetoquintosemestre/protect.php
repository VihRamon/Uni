<?php
if(!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['matricula'])) {
    die("Você não pode acessar está página por que não está logado. <p><a href=\"index-primeiraTela.php\"> Entrar </a></p>");

}



?>