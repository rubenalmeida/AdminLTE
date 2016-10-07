<?php

include_once 'conexao.php';

class Dados{
protected $quant;
protected $total;

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getQuant()
    {
        return $this->quant;
    }

    /**
     * @param mixed $quant
     */
    public function setQuant($quant)
    {
        $this->quant = $quant;
    }

    public function quantidade(){

        $sql="select SUM(quant) as total from estoque_livros";
        $conexao = new Conexao();
        $quant = $conexao->recuperarTodos($sql);

        $this->quant = $quant['total'];
    }

   public function clientes(){

        $sql="select count(id_cliente) as total from cliente";

        $conexao = new Conexao();
        $total = $conexao->recuperarTodos($sql);
        $this->total = $total['ids'];
    }

}