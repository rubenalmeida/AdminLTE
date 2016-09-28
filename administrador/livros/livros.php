<?php

include_once '../../conexao.php';

class Livros{

	protected $id_livros;
	protected $nome;
	protected $autor;
	protected $pessoa;
	protected $data1;
	protected $data2;
	protected $emprestado;


	public function getEmprestado()
	{
		return $this->emprestado;
	}

	/**
	 * @param mixed $emprestado
	 */
	public function setEmprestado($emprestado)
	{
		$this->emprestado = $emprestado;
	}


	public function getPessoa()
	{
		return $this->pessoa;
	}

	/**
	 * @param mixed $pessoa
	 */
	public function setPessoa($pessoa)
	{
		$this->pessoa = $pessoa;
	}

	/**
	 * @return mixed
	 */
	public function getData1()
	{
		return $this->data1;
	}

	/**
	 * @param mixed $data1
	 */
	public function setData1($data1)
	{
		$this->data1 = $data1;
	}

	/**
	 * @return mixed
	 */
	public function getData2()
	{
		return $this->data2;
	}

	/**
	 * @param mixed $data2
	 */
	public function setData2($data2)
	{
		$this->data2 = $data2;
	}


	public function getIdLivros()
	{
		return $this->id_livros;
	}

	/**
	 * @param mixed $id_livros
	 */
	public function setIdLivros($id_livros)
	{
		$this->id_livros = $id_livros;
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
	public function getAutor()
	{
		return $this->autor;
	}

	/**
	 * @param mixed $autor
	 */
	public function setAutor($autor)
	{
		$this->autor = $autor;
	}



	public function inserir($dados)
	{

		$nome = $dados['nome'];
		$autor = $dados['autor'];

		$sql = "insert into livros (nome, autor) values ('$nome', '$autor')";
        print_r($nome);

        $conexao = new Conexao();
		return $conexao->executar($sql);
	}

	public function alterar($dados)
	{
		$id_livros = $dados['id_livros'];
		$nome = $dados['nome'];
		$autor = $dados['autor'];


		$sql = "update livros set nome = '$nome', autor = '$autor' where id_livros = $id_livros";

        print_r($autor);
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

	public function recuperarTodos()
	{
		$conexao = new Conexao();

		$sql = "select * from livros WHERE emprestado = '0'";
		return $conexao->recuperarTodos($sql);
	}


	public function carregarPorId($id_livros){

		$sql = "select * from livros where id_livros = $id_livros";
        $conexao = new Conexao();
		$dados = $conexao->recuperarTodos($sql);
		$this->id_livros = $dados[0]['id_livros'];
		$this->nome = $dados[0]['nome'];
		$this->autor = $dados[0]['autor'];



    }

}
