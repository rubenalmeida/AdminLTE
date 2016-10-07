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

     /**
      * @return mixed
      */
     public function getIdCliente()
     {
         return $this->id_cliente;
     }

     /**
      * @param mixed $id_cliente
      */
     public function setIdCliente($id_cliente)
     {
         $this->id_cliente = $id_cliente;
     }

     /**
      * @return mixed
      */
     public function getNome()
     {
         return $this->nome;
     }

     /**
      * @param mixed $nome
      */
     public function setNome($nome)
     {
         $this->nome = $nome;
     }

     /**
      * @return mixed
      */
     public function getEmail()
     {
         return $this->email;
     }

     /**
      * @param mixed $email
      */
     public function setEmail($email)
     {
         $this->email = $email;
     }

     /**
      * @return mixed
      */
     public function getSenha()
     {
         return $this->senha;
     }

     /**
      * @param mixed $senha
      */
     public function setSenha($senha)
     {
         $this->senha = $senha;
     }

     /**
      * @return mixed
      */
     public function getSexo()
     {
         return $this->sexo;
     }

     /**
      * @param mixed $sexo
      */
     public function setSexo($sexo)
     {
         $this->sexo = $sexo;
     }

     /**
      * @return mixed
      */
     public function getTelefone()
     {
         return $this->telefone;
     }

     /**
      * @param mixed $telefone
      */
     public function setTelefone($telefone)
     {
         $this->telefone = $telefone;
     }

     /**
      * @return mixed
      */
     public function getEndereco()
     {
         return $this->endereco;
     }

     /**
      * @param mixed $endereco
      */
     public function setEndereco($endereco)
     {
         $this->endereco = $endereco;
     }

     /**
      * @return mixed
      */
     public function getStatus()
     {
         return $this->status;
     }

     /**
      * @param mixed $status
      */
     public function setStatus($status)
     {
         $this->status = $status;
     }



 public function cadastrar($dados){

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

     public function recuperarClientes(){

         $sql = "select * from clientes where status = '1'";
         $conexao = new conexao();
         return $conexao->recuperarTodos($sql);

     }

     public function recuperarInativos(){

         $sql = "select * from clientes where status = '0'";
         $conexao = new conexao();
         return $conexao->recuperarTodos($sql);

     }

     public function ativar($id_cliente){

         $sql = "update cliente set status = '1' where id_cliente = '$id_cliente' ";
         $conexao = new conexao();
         return $conexao->executar2($sql);

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
