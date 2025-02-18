<?php


abstract class Animal {
   
    abstract public function fazerSom();
}


class Cachorro extends Animal {
    public function fazerSom() {
        return "Au Au!";
    }
}


class Gato extends Animal {
    public function fazerSom() {
        return "Miau!";
    }
}


class Passaro extends Animal {
    public function fazerSom() {
        return "Piu Piu!";
    }
}


$cachorro = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();

echo "Cachorro: " . $cachorro->fazerSom() . "<br>";
echo "Gato: " . $gato->fazerSom() . "<br>";
echo "Pássaro: " . $passaro->fazerSom() . "<br>";
?>
