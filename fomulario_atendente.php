<h1> Novo atendente</h1>
<form action="criar_atendente.php" method="post">

	<label>Nome</label>
		<input type="text" name="nome">
	<label>CPF</label>
		<input type="tel" name="cpf">
	<label>Data de Nascimento</label>
		<input type="date" name="dataNascimento">
		
<label>Sexo:</label><input type="radio" name="sexo" value="M"/>
<label>Masculino</label>
<input type="radio" name="sexo" value="F"/> 
<label>Feminino</label>



	<label>Endereço</label>
		<input type="text" name="id_endereco">
	<label>Contato</label>
		<input type="text" name="id_contato">
	

<input type="submit" value="Salvar">
</form>
