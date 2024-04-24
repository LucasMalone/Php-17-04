<?php

require_once "Dao.php";
$dao = new Dao();

$dao->insertLogin("aluno", "senha_aluno");
$dao->listar();
