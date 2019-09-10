<?PHP               
include ('conexao.php');
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$contato=$_POST['contato'];
$endereco=$_POST['endereco'];
$sql = "insert into pacientes (nome, cpf, contato, endereco) values ('$nome', '$cpf','$contato','$endereco')";

if ($conexao->query($sql) === TRUE){
    echo 'Cadastro com sucesso!';


?>
<form action="formulario_paciente.php" method="get">
<input type="submit" value="Cadastrar novo Paciente"/>
</form>
<form action="lista_paciente.php" method="get">
<input type="submit" value="Listar Pacientes"/>
</form>

<?php 
} else {
echo $conexao->connect_error;
} 