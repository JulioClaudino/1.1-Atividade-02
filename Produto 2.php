<?php

class Produto
{ 
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco) {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }


    public function aumentarEstoque($valor)
    {
        //Precisa verificar se é um numero, e se é maior que 0 e menor que 850
        if(!is_numeric($valor)) {
            echo "Não é um número.";
        }
        if ($valor > 0 && $valor < 850) {
        $this->estoque += $valor;
        } 
        elseif ($valor > 850) {
            echo "Valor excedente.";
        } 
        elseif ($valor < 0) {
            echo 'Valor inválido';
        }
    }

    public function diminuirEstoque($valor)
    {
        //Precisa verificar se é um número, e se é maior que 0 e menor que 850
        if(!is_numeric($valor)) {
            echo "Não é um número.";
        }
        if ($valor > 0 && $valor < 850)
        {
        $this->estoque -= $valor;
        } 
        elseif ($valor > 850) {
            echo "Valor excedente.";
        } 
        elseif ($valor < 0) {
            echo "Valor inválido.";
        }
    }
    
    public function reajustarPreco($percentual)
    {
        if(!is_numeric ($percentual)) {
            echo "Não é um número.";
        } 
        if ($percentual > 0 && $percentual < 30)
        {
        $this->preco += ($percentual*$this->preco) / 100;
        }
        elseif ($percentual > 30) {
            echo "Percentual muito alto.";
        }
        elseif ($percentual < 0) {
            echo "percentual inválido";
        }
    } 
}

$celular = new Produto("Celular" , 10 , 850);
$celular->setDescricao = "Celular";
$celular->setEstoque = 10;
$celular->setPreco = 850;

echo $celular->getDescricao() . "<br>";
echo $celular->getEstoque() . "<br>";
echo $celular->getPreco();