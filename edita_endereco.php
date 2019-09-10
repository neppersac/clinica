<?php 

require_once 'conexao.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM contatos WHERE id = {$id}";
	$result = $conexao->query($sql);

	$data = $result->fetch_assoc();

	$conexao->close();	
?>

<h1>Editar contato</h1>
<form action="editar_contato.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
    <label>Fone</label>
    <input type="tel" name="fone" value="<?php echo $data['fone']?>"/>      
    <label>E-mail</label>
    <input type="email" name="email" value="<?php echo $data['email']?>"/>      
    
    <input type="submit" value="Salvar"/>
</form>

<?php
}
?>