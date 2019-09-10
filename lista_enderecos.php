<?php
    include('conexao.php');
    
    $sql = 'select * from enderecos';
 
    $contatos = mysqli_query($conexao, $sql);    
?>
    <h1>Endereços</h1>
    <a href="formulario_enderecos.php">Novo endereço</a>
    <table border="1">
        <tr>
            <th>Logradouro</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>CEP</th>
            <th>Ações</th>
        </tr>        
        
<?php       
    foreach ( $enderecos  as $endreco){
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