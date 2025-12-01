<?php
class Lanche{
    //atributos
    private $nome;
    private $ingredientes;
    private $preco;

    //area de metodos
    public function inserirLanche(){
        if ($this -> preco > 5){
            return true;
    }
        else{
        return false;
    }
}
    //area de construtor
    public function __construct($nome, $ingredientes,$preco){
        $this -> $nome = $nome;
        $this -> $ingredientes = $ingredientes;
        $this -> $preco = $preco;
    }

    //area de getters e setters

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}          