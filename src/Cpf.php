<?php  

class Cpf
{
    private string $numeroCpf;


    public function __construct(string $numeroDoCpf)
    {
        $this->numeroCpf = $numeroDoCpf;
    }
    public function getNumeroCpf()
    {
        return $this->numeroCpf;
    }
    
}