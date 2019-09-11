<?php
include("conexao.php");
$sql = 'SELECT * FROM atendentes';
$atendentes=mysqli_query($conexao, $sql);
?>

<h1> Atendente</h1>
<a href="fomulario_atendente.php"> Novo atendente</a>
<table border="1">
	<tr>
			<th>Nome</th>
			<th>CPF</th>
			<th>Data de Nascimento</th>
			<th>Sexo</th>
			<th>Endereço</th>
			<th>Contato</th>
			<th> Ações</th>
		</tr>
<?PHP
foreach($atendentes as $atendente){
	?>
<tr>
<?PHP echo '<td>' .$atendente['nome'] . '</td>';
	  echo '<td>'  .$atendente['cpf'] . '</td>';
	  echo '<td>'  .$atendente['dataNascimento'] . '</td>';
	  echo '<td>'  .$atendente['sexo'] . '</td>';
	  echo '<td>'  .$atendente['id_endereco'] . '</td>';
	  echo '<td>'  .$atendente['id_contato'] . '</td>';

?>
<td>
<?php echo"
		<a href='edita_atendentes.php?id=" . $atendente['id'] . "'>Edita</a>
		<a href='exclui_atendente.php?id=" . $atendente['id'] . "'>Excluir</a>	
 ";
 ?>
		</td>
</tr>
<?php
}
?>
</table>

