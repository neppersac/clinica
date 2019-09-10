<?php
  include('conexao.php');
$id=$_POST['id'];
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$contato=$_POST['contato'];
$endereco=$_POST['endereco'];
  
  $sql="update pacientes set nome='$nome',cpf='$cpf',contato='$contato',endereco='$endereco' where id='$id'";
//echo $sql;

if($conexao->query($sql)=== TRUE){
	 echo' Alteração com Sucesso!';
	 
	 
?>
     <form action="lista_paciente.php"method="get">
	   <input type="submit" value="Listar Pacientes"/>
	 </form>
	 
<?php

}else{
	echo "ERRO".$conexao->connect_error;
	
}
?>