<?PHP         
//excluir paciente      
include ('conexao.php');

      $id=$_GET['id'];
	  
      $sql = "DELETE FROM pacientes WHERE id={$id}";
	  //echo $sql;

if ($conexao->query($sql) === TRUE){
    echo 'Paciente excluido!';
	
	
?>

     <form action="lista_paciente.php" method="get">
     <input type="submit" value="Listar pacientes"/>
     </form>
	 <?php
	    }
		?>