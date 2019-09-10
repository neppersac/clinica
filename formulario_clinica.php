<?php
    include('conexao.php');
    
    $sql = 'select * from enderecos';
    $enderecos = mysqli_query($conexao, $sql);    

    $sql = 'select * from contatos';
    $contatos = mysqli_query($conexao, $sql);    
?>

<h1>Adicionar clínica</h1>
<form action="criar_clinica.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome">      

    <label for="id_endereco">Endereço</label>
    <select name="id_endereco">
<?php  
        foreach ( $enderecos  as $endereco){
            echo '<option value="'.$endereco['id'] .'" >' . $endereco['logradouro'] . '</option>'; 
        }        
 ?>
    </select>

    <label for="id_contato">Contato</label>
    <select name="id_contato">
<?php  
        foreach ( $contatos  as $contatos){
            echo '<option value="'.$contato['id'] .'" >' . $contato['fone'] . '</option>'; 
        }        
 ?>
    </select>
    
    <input type="submit" value="Salvar"/>
</form>