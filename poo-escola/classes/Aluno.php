<?php

class Aluno {
    private $nome;
    private $idade;
    private $matricula;

    public function __construct($nome, $idade, $matricula) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
    }

    public function getNome() { return $this->nome; }
    public function getIdade() { return $this->idade; }
    public function getMatricula() { return $this->matricula; }
}
