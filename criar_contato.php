<?php
include('conexao.php');

$fone = $_POST["fone"];
$email = $_POST["email"];

$sql = "insert into contatos(fone, email) values ('$fone','$email')";
//echo $sql; 
if($conexao->query($sql)===TRUE){
	echo 'Cadastro com sucesso!';

?>
<form action="formulario_contatos.php" method="get">
		<input type="submit" value="Cadastrar novo contato">
		</form>
		<form action="list_contatos.php" method="get">
	<input type="submit" value="Listar contatos 	">
		</form>
<?php

}else{

 echo "Erro".$conexao->connect_error;
}
?>