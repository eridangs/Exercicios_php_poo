<?php

require_once('./interfaceCrud.php');

class Livro implements Crud{
    private $titulo;
    private $autor;
    private $isbn;
    private $ano;
    protected $status;

    public function __construct($argumentos) {
        $this->Cadastrar($argumentos);
    }
    
    public function Cadastrar($argumentos){
        $arrayTeste = [
            $this->titulo => 'titulo',
            $this->autor => 'autor',
            $this->isbn => 'isbn',
            $this->ano => 'ano',
            $this->status => 'disponivel'
        ];
    }

    public function ler(){

    }

    public function setStatusLivro(){
        if($this->status == "disponivel"){
            $this->status = "indisponivel";
        }else{
            $this->status = "disponivel";
        }
    }

    public function getStatusLivro(){
        
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function Emprestar(){   
    }
}
?>