<?php
    include('conexao.php');
    
    $nome = $_POST['nome']; 
    $cnpj = $_POST['cnpj']; 
    $id_endereco = $_POST['id_endereco'];
    $id_contato = $_POST['id_contato'];
        
    $sql = "insert into clinicas(nome, cnpj, id_endereco, id_contato) values ('$nome' , '$cnpj', '$id_endereco', '$id_contato')";
    //echo $sql;
    if ( $conexao->query( $sql ) === TRUE){
        echo 'Cadastro com sucesso!';        
?>
        <form action="formulario_clinicas.php" method="get">
            <input type="submit" value="Cadastrar nova clinica"/>
        </form>
        <form action="lista_clinicas.php" method="get">
            <input type="submit" value="Listar clinicas"/>
        </form>
<?php
    } else {
        echo "Erro " . $conexao->connect_error;  
    } 
?>