<?php

include_once "../conexao.php";

class Clientes{

    protected $id_cliente;
    protected $nome;
    protected $sexo;
    protected $telefone;
    protected $endereco;
    protected $status;


    public function getIdCliente()
    {
        return $this->id_cliente;
    }


    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getSexo()
    {
        return $this->sexo;
    }


    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }


    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }


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


    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status = $status;
    }





    function inserir($dados){

        $nome = $dados['nome'];
        $sexo = $dados['sexo'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $status = $dados['status'];

        $sql  = "INSERT INTO cliente (nome , sexo, telefone, endereco, status) VALUES('$nome', '$sexo', '$telefone', '$endereco', '$status')";

        $conexao = new Conexao();
        return $conexao->executar($sql);
    }



    function alterar($dados){

        $id_cliente = $dados['id_cliente'];
        $nome = $dados['nome'];
        $sexo = $dados['sexo'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $status = $dados['status'];

        $sql  = "UPDATE cliente set nome = '$nome' , sexo = '$sexo', telefone = '$telefone', endereco = '$endereco', status = '$status' WHERE id_cliente = '$id_cliente'";
        print_r($sql);

        $conexao = new Conexao();
        return $conexao->executar($sql);
    }


    function excluir($id_cliente){

        $sql = "DELETE FROM cliente WHERE id_cliente = '$id_cliente'";
        $conexao = new Conexao();
        return $conexao->executar($sql);
    }

    function recuperarTodos(){

        $sql = "SELECT * FROM cliente";
        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    function recuperarTodosAtivos(){

        $sql = "SELECT * FROM cliente WHERE status = '1'";
        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    function carregarPorId($id_cliente){

        $sql = "select * from cliente where id_cliente = $id_cliente";
        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_cliente = $dados[0]['id_cliente'];
        $this->nome = $dados[0]['nome'];
        $this->sexo = $dados[0]['sexo'];
        $this->telefone = $dados[0]['telefone'];
        $this->endereco = $dados[0]['endereco'];
        $this->status = $dados[0]['status'];
    }

}