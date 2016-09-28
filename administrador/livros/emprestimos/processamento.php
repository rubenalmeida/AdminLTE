<?php 

include_once 'emprestimos.php';

$emprestimos = new Emprestimos();

switch($_GET['acao']){

	case 'devolver':
		$resultado = $emprestimos->devolver($_GET['id_livros']);
		break;
}

if($resultado){

	$mensagem = 'Concluido!';
} else {
	$mensagem = 'Ocorreu um erro! Tente novamente.';
}

?>

<script>
	///document.getElementById("").innerHTML = "Concluido";
	alert('<?php echo $mensagem; ?>');
	window.location.href = 'index.php';
</script>

