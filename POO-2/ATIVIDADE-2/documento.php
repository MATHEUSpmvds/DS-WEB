<?php


class pessoa{

    public $idade;
    public $nome;
}

class funcionario extends pessoa {

    protected $salario;

    public function setSalario($valor){
        $this->salario = $valor;
    }

    public function calcularBonus(){
        $this->salario = ($this->salario * 10) /100;
        return "O salário bonificado é: ".$this->salario;
    }
}
class gerente extends funcionario{

    public function calcularBonus(){
        $this->salario = ($this->salario * 20) /100 + $this->salario;
        return "O salário bonificado é: ".$this->salario;
    }  
}
class desenvolvedor extends funcionario{
    public function calcularBonus(){
        $this->salario = ($this->salario * 10) /100 + $this->salario;
        return "O salário bonificado é: ".$this->salario;
    }  
}

$matheus = new gerente();

$matheus->setSalario(1000);
echo $matheus->calcularBonus();

$arthur = new desenvolvedor();

$arthur->setSalario(1200);
echo $arthur->calcularBonus();

