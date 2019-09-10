<?php
    include('conexao.php');
    include('cabecalho.php');
    $sql = 'select * from contatos';
 
    $contatos = mysqli_query($conexao, $sql);    
?>
    <h1>Contatos</h1>
    <a href="formulario_contatos.php">Novo contato</a>
    <table border="1">
        <tr>
            <th>Fone</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>        
        
<?php       
    foreach ( $contatos  as $contato){
?>
     <tr>
         
<?php   echo '<td>' . $contato['fone'] . '</td>';
        echo '<td>' . $contato['email'] . '</td>';
?>
         <td>
<?php echo "        
        <a href='edita_contato.php?id=". $contato['id'] ."'>Edita</a> | 
        <a href='exclui_contato.php?id=". $contato['id'] ."'>Excluir</a>
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