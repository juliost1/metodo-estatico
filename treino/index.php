<?php

class Nomes {
    private $nome;
    private $idade;
    private $altura;
    private $peso;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }


    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }


    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }
}


$pessoa = new Nomes();
$pessoa->setNome("JULIA");
$pessoa->setIdade(23);
$pessoa->setAltura(1,67);
$pessoa->setPeso(55);

var_dump($pessoa->getNome(),
$pessoa->getIdade(),
$pessoa->getAltura(),
$pessoa->getPeso());

?>