<?php


/*
Criar uma classe chamada conta bancária que contenha métodos de depósito, saque e verificação de saldo
*/


class ContaBancaria{

    private $saldoAtual = 0;

    public function verificarSaldo(){
        return $this->saldoAtual;
    }

    public function depositarSaldo($valorDeposito){
        $this->saldoAtual = $this->saldoAtual + $valorDeposito;
        print('Depósito de ' . $valorDeposito . ' feito <br>');
    }

    public function sacarSaldo($valorSaque){

        if($this->saldoAtual < $valorSaque){
            print('Saque de '. $valorSaque .' Não autorizado! Verifique o saldo disponível e tente novamente <br>');
        }
        else{
            print('Saque de ' . $valorSaque . ' autorizado! <br>');
            $this->saldoAtual = $this->saldoAtual - $valorSaque;
        }
        
    }

}

$cliente = new ContaBancaria();

$saldoAtual = $cliente->verificarSaldo();
print('Saldo atual: ' . $saldoAtual ."<br>");
$cliente->depositarSaldo(300);
$cliente->sacarSaldo(100);
$saldoAtual = $cliente->verificarSaldo();
print('Saldo atual: ' . $saldoAtual . "<br>");
$cliente->sacarSaldo(300);

?>