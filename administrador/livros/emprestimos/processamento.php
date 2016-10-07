<?php 

include_once 'teste_emprestimos.php';

$emprestimos = new Emprestar();

switch($_GET['acao']){

	case 'pegarId':
		$resultado = $emprestimos->carregarPorId($_GET['id_cliente']);
		break;

	case 'ativar':
		$resultado = $emprestimos->ativar($_GET['id_cliente']);
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

