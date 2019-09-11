<?php
include('conexao.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dataNascimento = $_POST["dataNascimento"];
$sexo = $_POST["sexo"];
$id_endereco = $_POST["id_endereco"];
$id_contato = $_POST["id_contato"];

$sql = "insert into atendentes (nome,cpf,dataNascimento,sexo,id_endereco,id_contato) values ('$nome','$cpf','$dataNascimento','$sexo','$id_endereco','$id_contato')";
//echo $sql; 
if($conexao->query($sql)===TRUE){
	echo 'Cadastro com sucesso!';

?>
<form action="formulario_atendente.php" method="get">
		<input type="submit" value="Cadastrar novo atendente">
		</form>
		<form action="list_atendente.php" method="get">
	<input type="submit" value="Listar atendente	">
		</form>
<?php

}else{

 echo "Erro".$conexao->connect_error;
}
?>