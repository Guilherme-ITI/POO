<?php
include_once("../model/lanche.php");

$nome = $_POST['nome'];

$lanche = new Lanche ("Misto quente","pao,queijo, presunto", "7,00");

if ($lanche -> inserirLanche())
{
    //header ("location:castratoOk.php");
    include_once("../view/cadastroOk.php");
}
else
{
    //header ("location:cadastroErro.php");
    include_once("../view/cadastroErro.php");
}