<?php

//Questão 7 ]
//A)

 class Funcionario
{
    public $nome;
    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;
    public $ganhoanual;

    // Questão B

    public function recebeAumento(){

        $this->salario = $this->salario + $this->salario*0.1;

    }
     public function calculaGanhaAnual(){
         $this-> ganhoanual = $this->salario *12;
        echo ('o ganho anual de' .$this->nome.'é de'.$ganhoanual.'</br>');
     }
}







