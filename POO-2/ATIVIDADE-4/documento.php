<?php

class Veiculo {
    protected $marca;
    protected $modelo;
    private $velocidade;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade) {
        if ($velocidade >= 0) {
            $this->velocidade = $velocidade;
        }
    }

    public function exibirInformacoes() {
        echo "$this->marca $this->modelo está a $this->velocidade km/h.<br>";
    }
}

class Carro extends Veiculo {
    public function acelerar() {
        $this->setVelocidade($this->getVelocidade() + 10);
    }
}

class Moto extends Veiculo {
    public function acelerar() {
        $this->setVelocidade($this->getVelocidade() + 15);
    }
}

$carro = new Carro("Toyota", "Corolla");
$moto = new Moto("Honda", "CB500");

$carro->acelerar();
$moto->acelerar();

$carro->exibirInformacoes();
$moto->exibirInformacoes();

?>
