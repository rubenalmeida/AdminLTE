<?php

include_once 'conexao.php';

class Livros{

	protected $id_livros;
	protected $nome;
	protected $quantidade;
    protected $id_autor;
    protected $id_editora;

    public function getQuantidade()
    {
        return $this->quantidade;
    }


    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }



    public function getIdEditora()
    {
        return $this->id_editora;
    }

    public function setIdEditora($id_editora)
    {
        $this->id_editora = $id_editora;
    }


    public function getIdAutor()
    {
        return $this->id_autor;
    }


    public function setIdAutor($id_autor)
    {
        $this->id_autor = $id_autor;
    }



	public function getIdLivros()
	{
		return $this->id_livros;
	}



	public function setIdLivros($id_livros)
	{
		$this->id_livros = $id_livros;
	}



	public function getNome()
	{
		return $this->nome;
	}


	public function setNome($nome)
	{
		$this->nome = $nome;
	}






	public function inserir($dados)
	{

		$nome = $dados['nome'];
		$id_autor = $dados['id_autor'];
		$id_editora = $dados['id_editora'];
		$quantidade = $dados['quantidade'];

		$sql = "insert into livros (nome, quant,  id_autor, id_editora) values ('$nome', '$quantidade', '$id_autor', '$id_editora')";
        

                $conexao = new Conexao();
		        return $conexao->executar($sql);
	}

	public function alterar($dados)
	{
		$id_livros = $dados['id_livros'];
		$nome = $dados['nome'];
        $id_autor = $dados['id_autor'];
        $id_editora = $dados['id_editora'];
        $quantidade = $dados['quantidade'];


		$sql = "update livros set nome = '$nome', quant = '$quantidade' ,  id_autor = '$id_autor', id_editora = '$id_editora' where id_livros = $id_livros";

        
		$conexao = new Conexao();
		return $conexao->executar($sql);
	}

	public function emprestar($dados)
	{
		$id_livros = $dados['id_livros'];

		$data1 = $dados['data1'];
		$data2 = $dados['data2'];




		$sql = "insert into emprestimos (data1, data2, id_livro)  VALUES ('$data1', '$data2', '$id_livros')";
		$conexao = new Conexao();
		return $conexao->executar($sql);
	}

	public function excluir($id_livros)
	{
		$sql = "delete from livros where id_livros = $id_livros";
		$conexao = new Conexao();
		return $conexao->executar($sql);
	}



	public function recuperarTodos(){
		$conexao = new Conexao();

		$sql = "select * from vw_livros ORDER BY livro";
		return $conexao->recuperarTodos($sql);
	}



        public function recuperarEmprestados(){
		$conexao = new Conexao();

		$sql = "select * from vw_livros ORDER BY livro";
		return $conexao->recuperarTodos($sql);
	}


    public function recuperarAutores(){
        $conexao = new Conexao();

        $sql = "select * from autor";
        return $conexao->recuperarTodos($sql);
    }


    public function recuperarEditoras(){
        $conexao = new Conexao();

        $sql = "select * from editora";
        return $conexao->recuperarTodos($sql);
    }



	public function carregarPorId($id_livros){

		$sql = "select * from livros where id_livros = $id_livros";
        $conexao = new Conexao();
		$dados = $conexao->recuperarTodos($sql);
		$this->id_livros = $dados[0]['id_livros'];
		$this->nome = $dados[0]['nome'];
		$this->quantidade = $dados[0]['quant'];
		$this->id_autor = $dados[0]['id_autor'];
		$this->id_editora = $dados[0]['id_editora'];



    }

}
