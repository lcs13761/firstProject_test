<?php
include __DIR__. "/theme/theme.php";
include __DIR__."/model/user.php";
require __DIR__ . "/vendor/autoload.php";


use model\user;
use View\repository;

$nome = filter_input(INPUT_POST, "nome");
$emai = filter_input(INPUT_POST, "email");
$telefone = filter_input(INPUT_POST, "telefone");
$empresa = filter_input(INPUT_POST, "empresa");
$protudo = filter_input(INPUT_POST, "protudo");
$tipo = filter_input(INPUT_POST, "tipo");
$user = new user($nome,$emai,$telefone,$empresa,$protudo,$tipo);
$conect = new repository();
$conect->inset($user);
