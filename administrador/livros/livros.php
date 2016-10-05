<?php

include_once 'conexao.php';

class Livros{

	protected $id_livros;
	protected $nome;
	protected $id_autor;
	protected $id_editora;


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
	protected $emprestado;


	public function getEmprestado()
	{
		return $this->emprestado;
	}


	public function setEmprestado($emprestado)
	{
		$this->emprestado = $emprestado;
	}


	public function getPessoa()
	{
		return $this->pessoa;
	}



	public function setPessoa($pessoa)
	{
		$this->pessoa = $pessoa;
	}



	public function getData1()
	{
		return $this->data1;
	}



	public function setData1($data1)
	{
		$this->data1 = $data1;
	}



	public function getData2()
	{
		return $this->data2;
	}



	public function setData2($data2)
	{
		$this->data2 = $data2;
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


	public function getAutor()
	{
		return $this->autor;
	}


	public function setAutor($autor)
	{
		$this->autor = $autor;
	}






	public function inserir($dados)
	{

		$nome = $dados['nome'];
		$id_autor = $dados['id_autor'];
		$id_editora = $dados['id_editora'];

		$sql = "insert into livros (nome, autor) values ('$nome', '$autor')";
        

                $conexao = new Conexao();
		return $conexao->executar($sql);
	}

	public function alterar($dados)
	{
		$id_livros = $dados['id_livros'];
		$nome = $dados['nome'];
		$autor = $dados['autor'];


		$sql = "update livros set nome = '$nome', autor = '$autor' where id_livros = $id_livros";

        
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

		$sql = "select * from vw_livros ORDER BY livro";
		return $conexao->recuperarTodos($sql);
	}
        
        public function recuperarEmprestados()
	{
		$conexao = new Conexao();

		$sql = "select * from vw_livros ORDER BY livro";
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
