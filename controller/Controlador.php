<?php
require_once '../model/ProdutoModel.php';
require_once '../model/ClienteModel.php';
require_once '../model/FuncionarioModel.php';

class MainController {
    private $produtoModel;
    private $clienteModel;
    private $funcionarioModel;

    public function __construct() {
        $this->produtoModel = new ProdutoModel();
        $this->clienteModel = new ClienteModel();
        $this->funcionarioModel = new FuncionarioModel();
    }

    // Produtos
    public function listarProdutos() {
        return $this->produtoModel->retornarProdutos();
    }

    // Clientes
    public function listarClientes() {
        return $this->clienteModel->retornarClientes();
    }

    // Funcionários
    public function listarFuncionarios() {
        return $this->funcionarioModel->retornarFuncionarios();
    }
}
?>
