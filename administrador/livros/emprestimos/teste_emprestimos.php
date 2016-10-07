<?php  

 include_once '../../cadastros/conexao.php';

 class Emprestar{

     protected $id_cliente;
     protected $nome;
     protected $email;
     protected $senha;
     protected $sexo;
     protected $telefone;
     protected $endereco;
     protected $status;



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


     public function listarEmprestados($id_cliente){

     $sql = "select * from view_emprestimos where id_cliente = '$id_cliente'";
     $conexao = new conexao();
     return $conexao->recuperarTodos($sql);

 }



     public function carregarPorId($id_cliente)
     {
         $sql = "select * from cliente where id_cliente = $id_cliente";
         $conexao = new Conexao();
         $dados = $conexao->recuperarTodos($sql);
         $this->id_cliente = $dados[0]['id_cliente'];
         $this->nome = $dados[0]['nome'];
         $this->email = $dados[0]['email'];
         $this->senha = $dados[0]['senha'];
         $this->sexo = $dados[0]['sexo'];
         $this->telefone = $dados[0]['telefone'];
         $this->endereco = $dados[0]['endereco'];
         $this->status = $dados[0]['status'];

     }


 }
