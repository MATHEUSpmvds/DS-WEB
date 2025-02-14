<?php

class VideoGame {
    public $marca;
    public $modelo;
    public $cor;
    public $botoes;
    public $entradas;

    public function ligar() {
        echo "Videogame ligado<br>";
    }
    public function desligar() {
        echo "Videogame desligado<br>";
    }
    public function pesquisar() {
        echo "Pesquisando<br>";
    }
    public function lerDisco() {
        echo "Iniciando jogo<br>";
    }
    public function verFilmes() {
        echo "Iniciar filme<br><br>";
    }
}

$xbox = new VideoGame();
$xbox->marca = "Microsoft";
$xbox->modelo = "One S";
$xbox->cor = "preto e branco";
$xbox->botoes = "3 botões";
$xbox->entradas = "USB, HDMI e entrada de alimentação";

$xbox->ligar();
$xbox->desligar();
$xbox->pesquisar();
$xbox->lerDisco();
$xbox->verFilmes();

class Tenis {
    public $marca;
    public $modelo;
    public $cor;
    public $tamanho;
    public $material;

    public function andar() {
        echo "Andar com o tênis<br>";
    }
    public function calcar() {
        echo "Tênis calçado<br>";
    }
    public function correr() {
        echo "Correr com o tênis<br>";
    }
    public function descalcar() {
        echo "Tirar tênis<br><br>";
    }
}

$nike = new Tenis();
$nike->marca = "Nike";
$nike->modelo = "Dunk";
$nike->cor = "Preto";
$nike->tamanho = "Depende do seu tamanho";
$nike->material = "Couro";

$nike->andar();
$nike->calcar();
$nike->correr();
$nike->descalcar();

class Computador {
    public $placaMae;
    public $placaDeVideo;
    public $processador;
    public $sistemaOperacional;
    public $memoriaRam;

    public function ligar() {
        echo "Computador ligado<br>";
    }
    public function desligar() {
        echo "Computador desligado<br>";
    }
    public function processar() {
        echo "Processando itens<br>";
    }
    public function entradaDeDados() {
        echo "Dados<br><br>";
    }
}

$computador = new Computador();
$computador->placaMae = "Asus";
$computador->placaDeVideo = "Nvidia";
$computador->processador = "Intel";
$computador->sistemaOperacional = "Windows";
$computador->memoriaRam = "Fury";

$computador->ligar();
$computador->desligar();
$computador->processar();
$computador->entradaDeDados();

class Bola {
    public $marca;
    public $modelo;
    public $cor;
    public $formato;
    public $material;

    public function rolar() {
        echo "Bola rolando<br>";
    }
    public function chutar() {
        echo "Chutar bola<br>";
    }
    public function brincar() {
        echo "Brincar com a bola<br>";
    }
    public function jogar() {
        echo "Jogar com a bola<br><br>";
    }
}

$bola = new Bola();
$bola->marca = "Nike";
$bola->modelo = "Copa do Mundo 2018";
$bola->cor = "Preto e Branco";
$bola->formato = "Redondo";
$bola->material = "Couro";

$bola->rolar();
$bola->chutar();
$bola->brincar();
$bola->jogar();

class Veiculo {
    public $marca;
    public $modelo;
    public $cor;
    public $rodas;
    public $material;

    public function frear() {
        echo "Frear carro<br>";
    }
    public function acelerar() {
        echo "Acelerar carro<br>";
    }
    public function buzinar() {
        echo "Buzinar carro<br><br>";
    }
}

$toyota = new Veiculo();
$toyota->marca = "Toyota";
$toyota->modelo = "Supra MK4";
$toyota->cor = "Roxo";
$toyota->rodas = "4 rodas";
$toyota->material = "Metal";

$toyota->frear();
$toyota->acelerar();
$toyota->buzinar();

class ContaBancaria {
    public $saldo;
    public $numeroDaConta;
    public $nomeDoTitular;

    public function exibirSaldo() {
        return "Nome do Titular: {$this->nomeDoTitular}<br>" .
               "Número da Conta: {$this->numeroDaConta}<br>" .
               "Saldo: R$ " . number_format($this->saldo, 2, ',', '.') . "<br><br>";
    }
    public function depositar($deposito){
        $this->saldo += $deposito;
        return"este é o novo saldo" $this->saldo;
    }
    public  function sacar ($saque){


        $this->saldo -= $saque;
        return"este é o novo saldo" .$this->saldo;
    }
}

$contaDoArthur = new ContaBancaria();
$contaDoArthur->saldo = 114567890;
$contaDoArthur->numeroDaConta = 4567875;
$contaDoArthur->nomeDoTitular = "Arthur";

echo $contaDoArthur->exibirSaldo();

?>