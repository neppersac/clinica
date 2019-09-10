<?php
    include('conexao.php');
    $id = $_POST['id'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
        
    $sql = "update contatos set fone = '$fone', email = '$email' where id = '$id'";
    //echo $sql;
    if ( $conexao->query( $sql ) === TRUE){
        echo 'Alteração com sucesso!';        
?>        
        <form action="lista_contatos.php" method="get">
            <input type="submit" value="Listar contatos"/>
        </form>
<?php
    } else {
        echo "Erro " . $conexao->connect_error;  
    } 
?>