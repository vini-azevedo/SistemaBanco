<?php



class Conta
{
    private Titular $titular;
    private float $saldo;
    private static float $numeroDeContas = 0;

    public function __construct(Titular $Titular)

    {
        $this->titular = $Titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorAsacar)
    {
        if ($valorAsacar > $this->saldo) {
            echo "saldo indisponível";
        } else {
            $this->saldo -= $valorAsacar;
        }
    }

    public function depositar(float $valorAdepositar)
    {
        if ($valorAdepositar > 0) {
            $this->saldo += $valorAdepositar;
        } else {
            echo "Valor do deposito tem que ser maior que 0";
        }
    }
    public function transferir(float $valorATransferir, Conta $contaATranferir)
    {
        if ($valorATransferir > $this->saldo) {
            echo "Tranferencia não autorizada";
        } else {
            $this->sacar($valorATransferir);
            $contaATranferir->depositar($valorATransferir);
        }
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getNometitular()
    {
        return $this->titular->getNome();
    }
    public function getCpfTitular()
    {
        return $this->titular->getCpf();
    }
    public static function getNumeroDeContas()
    {
        return self::$numeroDeContas;
    }
}
