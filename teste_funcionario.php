<?php
    //Questão 8

    include "Funcionario.php";

    $jabber = new Funcionario();
    $jabber->departamento= "RH";
    $jabber->salario = 9000;

    $jabber->recebeAumento();
    $jabber->ganhoanual();

    echo $jabber->salario;
    print_r($jabber);

    print "\n-----------------------------------------------------\n";

    $cristoldo = new Funcionario();
    $cristoldo->salario = 3000;
    //print_r($cristoldo);