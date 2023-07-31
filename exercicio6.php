<?php

/*
Crie uma classe chamada "Veiculo" com atributos como "marca", "modelo" e "ano".
Em seguida, crie uma classe "Carro" que herde de "Veiculo" e tenha um atributo adicional "portas"
*/
//Classe Pai  - Veículo que armazena os valores principais
class Veiculo{
    
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getAno(){
        return $this->ano;
    }
}

class Carro extends Veiculo{
    private $qtdePortas;

    public function __construct($marca, $modelo, $ano, $qtdePortas){
        parent::__construct($marca, $modelo, $ano);
        $this->qtdePortas = $qtdePortas;
    }

    public function getQtdePortas(){
        return $this->qtdePortas;
    }
}

$carro1 = new Carro('Ford', 'Fiesta', '2011', '4');
print('Exibindo carro 1' . ' Marca: ' . $carro1->getMarca() . ' Modelo: '. $carro1->getModelo() . ' Ano: ' . $carro1->getAno() . ' Qtde de Portas: ' . $carro1->getQtdePortas() . '<br>');
$carro2 = new Carro('Volkswagen', 'SaveiroCross', '2015', '2');
print('Exibindo carro 2' . ' Marca: ' . $carro2->getMarca() . ' Modelo: '. $carro2->getModelo() . ' Ano: ' . $carro2->getAno() . ' Qtde de Portas: ' . $carro2->getQtdePortas() . '<br>');
$carro3 = new Carro('Renault', 'Kwid', '2017', '4');
print('Exibindo carro 3' . ' Marca: ' . $carro3->getMarca() . ' Modelo: '. $carro3->getModelo() . ' Ano: ' . $carro3->getAno() . ' Qtde de Portas: ' . $carro3->getQtdePortas() . '<br>');


?>