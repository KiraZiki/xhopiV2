<?php
require_once '../processamento/funcoesBD.php'; 

class ProdutoModel {
    public function retornarProdutos() {
        $conexao = conectarBD();
        $consulta = "SELECT * FROM produto";
        $resultado = mysqli_query($conexao, $consulta);
        
        $produtos = [];
        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $produtos[] = $row;
            }
        }
        
        return $produtos;
    }
}
?>
