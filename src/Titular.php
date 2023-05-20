<?php

class Titular 
{
    private Cpf $cpf;
    private string $nome;


    public function __construct(Cpf $cpf,string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
    }

    public function getNome()
    {
        return $this->nome;
    }
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
    public function getCpf()
    {
        return $this->cpf->getNumeroCpf();
    }
}