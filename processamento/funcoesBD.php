<?php

function conectarBD(){

    $conexao = mysqli_connect("localhost","root","","xhopii");
    return($conexao);
}

function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) 
                 VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";
    mysqli_query($conexao,$consulta);
}

function inserirProduto($nome, $fabricante, $descricao, $valor){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor) 
                 VALUES ('$nome','$fabricante','$descricao','$valor')";
    mysqli_query($conexao,$consulta);
}

function inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionario (cpf, nome, sobrenome, dataNascimento, telefone, email, salario) 
                 VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$salario')";
    mysqli_query($conexao,$consulta);
}

function retornarClientes(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao,$consulta);
    return $listaClientes;
}

function retornarProdutos() {
    $conexao = conectarBD();
    if ($conexao) {
        $consulta = "SELECT * FROM produto";
        $listaProdutos = mysqli_query($conexao, $consulta);
        return mysqli_fetch_all($listaProdutos, MYSQLI_ASSOC); // Certifique-se de retornar como array associativo
    } else {
        return []; // Retorne um array vazio se a conexão falhar
    }
}


//IMPLEMENTAR AQUI O RETORNO DA LISTA DE FUNCIONÁRIOS EXISTENTES NO BANCO DE DADOS

?>