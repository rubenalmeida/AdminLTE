<?php 

include_once 'teste_emprestimos.php';

$emprestimos = new Emprestar();

switch($_GET['acao']){

	case 'pegarId':
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
	window.location.href = 'javascript:history.back()';
</script>

