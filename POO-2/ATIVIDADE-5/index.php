<?php

abstract class Produto {
    protected $nome;
    protected $preco;
    protected $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    abstract public function calcularDesconto();

    public function exibirPrecoFinal() {
        echo "Produto: $this->nome - Preço final: R$ " . number_format($this->calcularDesconto(), 2) . "<br>";
    }
}

class Eletronico extends Produto {
    public function calcularDesconto() {
        $desconto = $this->preco * 0.10;
        if ($this->estoque < 5) {
            $desconto += $this->preco * 0.10;
        }
        return $this->preco - $desconto;
    }
}

class Roupa extends Produto {
    public function calcularDesconto() {
        $desconto = $this->preco * 0.20;
        if ($this->estoque < 5) {
            $desconto += $this->preco * 0.10;
        }
        return $this->preco - $desconto;
    }
}

$tv = new Eletronico("TV 42"", 2000, 3);
$camisa = new Roupa("Camisa Polo", 100, 10);

$tv->exibirPrecoFinal();
$camisa->exibirPrecoFinal();

?>