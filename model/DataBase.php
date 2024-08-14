<?php

    class DataBase{
        private $host;
        private $login;
        private $pass;
        private $dataBase;

        public function __construct($host, $login, $pass, $dataBase){
            $this->host = $host;
            $this->login = $login;
            $this->pass = $pass;
            $this->dataBase = $dataBase;
        }

        public function connectBD(){
            $conn = mysqli_connect($this->host, $this->login, $this->pass, $this->dataBase);
            return($conn);
        }

        public function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){
    
            $conexao = conectarBD();
            $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) 
                         VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";
            mysqli_query($conexao,$consulta);
        }

        public function inserirProduto($produto){
    
            $conexao = conectarBD();
            $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor) 
                         VALUES (
                         '$produto->get_Nome()',
                         '$produto->get_Fabricante()',
                         '$produto->get_Descricao()',
                         '$produto->get_Valor()')";
            mysqli_query($conexao,$consulta);
        }
    }

?>