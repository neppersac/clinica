<?php
    // exluir contato 
    include('conexao.php');
    
    $id = $_GET['id'];
    
        
    $sql = "DELETE FROM contatos WHERE id = {$id}";
    //echo $sql;
    if ( $conexao->query( $sql ) === TRUE){
        echo 'Contato excluído!';        
        
   
?>
    <form action="lista_contatos.php" method="get">
        <input type="submit" value="Listar contatos"/>
    </form>
<?php
    }
?>
