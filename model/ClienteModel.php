<?php
require_once '../processamento/funcoesBD.php'; 

class ClienteModel {
    public function retornarClientes() {
        $conexao = conectarBD(); 
        if (!$conexao) {
            die("Falha na conexão: " . mysqli_connect_error());
        }

        $consulta = "SELECT * FROM cliente"; 
        $listaClientes = mysqli_query($conexao, $consulta);

        if (!$listaClientes) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }

        return $listaClientes;
    }
}
?>
