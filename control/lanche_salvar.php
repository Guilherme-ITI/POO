<?php
include_once("../model/lanche.php");

$nome = $_POST['nome'];

$lanche = new Lanche ("Misto quente","pao,quueijo, presunto", "7,00");

$lanche -> inserirLanche();

$lanche->setNome("X Burguer");