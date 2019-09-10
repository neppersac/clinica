<?php
    include('conexao.php');
    include('cabecalho.php');
    $sql = 'select * from clinicas';
 
    $clinicas = mysqli_query($conexao, $sql);    
?>
    <h1>Clinicas</h1>
    <a href="formulario_clinica.php">Adicionar clinica</a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Fone</th>            
            <th>Ações</th>
        </tr>        
        
<?php       
    foreach ( $clinicas  as $clinica){
?>
     <tr>
         
<?php   
        echo '<td>' . $clinica['nome'] . '</td>';
        echo '<td>' . $clinica['cnpj'] . '</td>';
        echo '<td>' . $clinica['fone'] . '</td>';        
?>
         <td>
<?php echo "        
        <a href='edita_clinica.php?id=". $clinica['id'] ."'>Edita</a> | 
        <a href='exclui_clinica.php?id=". $clinica['id'] ."'>Excluir</a>
    ";
?>                 
         </td> 
     </tr>        
<?php       
    }
?>         
    </table>    
<?php
    include('rodape.php');
?>