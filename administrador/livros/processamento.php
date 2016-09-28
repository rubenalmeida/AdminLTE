<?php 

include_once 'livros.php';

$livros = new Livros();

switch($_GET['acao']){
	case 'salvar':
		
		if(empty($_POST['id_livros'])){
			$resultado = $livros->inserir($_POST);
		} else {
			$resultado = $livros->alterar($_POST);
		}
		
		break;

	case 'emprestar':
			$resultado = $livros->emprestar($_POST);
		break;

	case 'excluir':
		$resultado = $livros->excluir($_GET['id_livros']);
		break;
}

if($resultado){
	$mensagem = 'Concluido!';
} else {
	$mensagem = 'Ocorreu um erro! Tente novamente.';
}

?>

<script>
	alert('<?php echo $mensagem; ?>');
	window.location.href = 'index.php';
</script>
