<?php

class Professor {
    private string $nome;
    private string $cpf;
    private string $especializacao;

    public function __construct($nome, $cpf, $especializacao) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->especializacao = $especializacao;
    }

    public function getNome() { return $this->nome; }
    public function getCpf() { return $this->cpf; }
    public function getEspecializacao() { return $this->especializacao; }
}
