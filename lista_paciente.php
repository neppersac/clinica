<?PHP               
          include('conexao.php');
		  
         $sql = 'select * FROM pacientes';
		 
          $pacientes = mysqli_query($conexao, $sql);
		  
?>


<h1>Pacientes</h1>
<a href="formulario_paciente.php"> Novo Paciente</a>
<table border="1">
   <tr>
    <th>Nome</th>
	<th>CPF</th>
	<th>Contato</th>
	<th>Endereço</th>   
	<th>Ações</th>
   </tr>

    
<?php

        foreach ($pacientes as $paciente){
?>  
	  <tr>
<?php    echo '<td>' . $paciente['nome'] . '</td>';
         echo '<td>' . $paciente['cpf'] . '</td>';
		 echo '<td>' . $paciente['contato'] . '</td>';
		 echo '<td>' . $paciente['endereco'] . '</td>';
?>   
       <td>   
<?php echo "
          <a href='edita_paciente.php?id=".$paciente['id']."'>Edita</a>
		  <a href='exclui_paciente.php?id=".$paciente['id']."'>Excluir</a>
       ";  
?>
     </td>
	 </tr>
	
     <?php
      }
     ?>
</table>
