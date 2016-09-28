<?php

include_once '../conexao.php';

session_start();

$usuarioLogin = $_POST['usuarioLogin'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM usuario WHERE usuario = '$usuarioLogin' AND senha = '$senha'  AND status = '1'";
$conexao = new Conexao();
$query = $conexao->recuperarTodos($sql);

if (count($query)) {

    $_SESSION['usuario'] = $query[0]['usuario'];
    $_SESSION['nome'] = $query[0]['nome'];
    $_SESSION['senha'] = $query[0]['senha'];
    $_SESSION['nivel'] = $query[0]['nivel'];
    $_SESSION['status'] = $query[0]['status'];



    if($_SESSION['nivel'] == 1 && $_SESSION['status'] == 1){
        header("Location: ../index.php");
    }elseif ($_SESSION['nivel'] == 0 && $_SESSION['status'] == 1){
        header("Location: ../../../funcionario/index.php");
    }

}else{

    session_destroy();
    $mensagem = 'Login incorreto ou usuario desativado!';
}


?>



<script>
    alert('<?php echo $mensagem; ?>');
    window.location.href = '../index.php';
</script>





