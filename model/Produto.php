<?php

class Produto{

    protected $nome;
    protected $fabricante;
    protected $descricao;
    protected $valor;

    class ProdutoModel {
        public function retornarProdutos() {
            return retornarProdutos(); // Chama a função do funcoesBD.php
        }
    }

    public function __construct($nome, $fabricante, $descricao, $valor){
        $this->nome = $Nome;
        $this->fabricante = $Fabricante;
        $this->descricao = $Descricao;
        $this->valor = $Valor;
    }

    public function get_Nome(){
        return($this->nome);
    }
    public function set_Nome(){
        $this->nome = $Nome;
    }

    public function get_Fabricante(){
        return($this->fabricante);
    }
    public function set_Fabricante(){
        $this->fabricante = $Fabricante;
    }

    public function get_Descricao(){
        return($this->descricao);
    }
    public function set_Descricao(){
        $this->descricao = $Descricao;
    }

    public function get_Valor(){
        return($this->valor);
    }
    public function set_Valor(){
        $this->valor = $Valor;
    }

    public function aplicarCupom($cupomTaxa){
        $valorDesconto = ($this->valor*$cupomTaxa) / 100;
        $this->valor = $this->valor - $valorDesconto;
    }
}

?>