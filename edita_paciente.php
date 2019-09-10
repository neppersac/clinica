<?php

require_once'conexao.php';
if($_GET['id']){
	   $id=$_GET['id'];
	   $sql="SELECT*FROM pacientes WHERE id={$id}";
	   $result=$conexao->query($sql);
	   $data=$result->fetch_assoc();
	   $conexao->close();
	   
	   
?>
<h1>Editar Paciente</h1>
  <form action="editar_paciente.php"method="post">
    <input type="hidden"name="id"value="<?php echo $data['id']?>"/>
	<label>Nome</label>
	<input type="text"name="nome"value="<?php echo $data['nome']?>"/>
	<label>CPF</label>
	<input type="text"name="cpf" value="<?php echo $data['cpf']?>"/>
	<label>Contato</label>
	<input type="text"name="contato" value="<?php echo $data['contato']?>"/>
	<label>Endereço</label>
	<input type="text"name="endereco" value="<?php echo $data['endereco']?>"/>
	<input type="submit"value="Salvar"/>


</form>

<?php
}
?>