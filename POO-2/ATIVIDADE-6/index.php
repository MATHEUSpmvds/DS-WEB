<?php

class Documento {
    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = preg_replace('/\D/', '', $numero);
    }
}

class CPF extends Documento {
    public function validar() {
        $cpf = $this->getNumero();

        if (strlen($cpf) != 11 || count(array_unique(str_split($cpf))) == 1) {
            return false;
        }

        return true;
    }
}

$cpf = new CPF();
$cpf->setNumero("123.456.789-09");

echo "CPF válido? " . ($cpf->validar() ? "Sim" : "Não");

?>
