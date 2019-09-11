<?PHP         
//excluir atendente      
include ('conexao.php');

      $id=$_GET['id'];
	  
      $sql = "DELETE FROM atendentes WHERE id={$id}";
	  //echo $sql;

if ($conexao->query($sql) === TRUE){
    echo 'Atendente excluido!';
	
	
?>

     <form action="list_atendente.php" method="get">
     <input type="submit" value="Listar atendentes"/>
     </form>
	 <?php
	    }
		?>