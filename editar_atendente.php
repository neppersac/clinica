<?php
  include('conexao.php');
  $id=$_POST['id'];
  $nome=$_POST['nome'];
  $cpf=$_POST['cpf'];
  $dataNascimento=$_POST['dataNascimento'];
  $sexo=$_POST['sexo'];
  $id_endereco=$_POST['id_endereco'];
  $id_contato=$_POST['id_contato'];
  
  $sql="update atendente set nome='$nome',cpf='$cpf',dataNascimento='$dataNascimento',sexo='$sexo',id_endereco='$id_endereco',id_contato='$id_contato' where id='$id'";
//echo $sql;

if($conexao->query($sql)=== TRUE){
	 echo' Alteração com Sucesso!';
	 
	 
?>
     <form action="list_atendente.php"method="get">
	   <input type="submit" value="Listar Atendentes"/>
	 </form>
	 
<?php

}else{
	echo "ERRO".$conexao->connect_error;
	
}
?>