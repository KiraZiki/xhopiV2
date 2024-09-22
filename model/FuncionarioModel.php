<?php
require_once '../processamento/funcoesBD.php';

class FuncionarioModel {
    public function retornarFuncionarios() {
        $conexao = conectarBD(); // Chama a função de conexão

        if (!$conexao) {
            die("Falha na conexão: " . mysqli_connect_error());
        }

        $consulta = "SELECT * FROM funcionario"; 
        $listaFuncionarios = mysqli_query($conexao, $consulta);

        if (!$listaFuncionarios) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }

        return $listaFuncionarios;
    }
}
?>
