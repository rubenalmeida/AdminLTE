<?php  

 include_once '../../cadastros/conexao.php';

 class emprestar{




	protected $resultado;






 public function emprestar($dados){

  $id_cliente = $dados['id_cliente'];
  $id_livros = $dados['id_livros'];
  $devolucao = $dados['devolucao'];


   $sql = "INSERT INTO emprestimos (id_cliente, dia_emprestimo, dia_devolucao) VALUES ('$id_cliente', now(), '$devolucao')";
   $conexao = new conexao();
   $id_emprestimos = $conexao->executar($sql);


   foreach ($id_livros as $livros) {

   	$sql2 = "INSERT INTO livros_emprestimos VALUES ('{$livros}', '$id_emprestimos')";
   	$conexao->executar2($sql2);


   }



 }















 }
?>