<?php
require_once('./interfaceCrud.php');
class Leitor implements Crud{
    private $nome;
	private $cpf;
	private $email;
    public $livrosEmprestados = [];
    const quantidadeMax = 3;

    public function __construct($argumentos) {
        $this->Cadastrar($argumentos);
    }
    
    public function Cadastrar($argumentos){
        $this->nome = $argumentos['nome'];
        $this->cpf = $argumentos['cpf'];
        $this->email = $argumentos['email'];
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function atualizar(){}
    public function deletar(){}

    public function Emprestar(){
        
    }
	public function Devolver(){
        // Biblioteca::Devolver();
        // $array = $this->livrosEmprestados;
        // $indice = array_search($livro,$array);
        // if ($indice !== false){
        //     unset($array[$indice]);
        //     $array = array_values($array);
        // }
    }
	public function ConsultarLivros(){
        
    }
}
?>