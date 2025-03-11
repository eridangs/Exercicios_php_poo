<?php
require_once('./Livro.php');
require_once('./Leitor.php');
class Biblioteca{
    public static $listaDeLivros = [];

    public static $listaDeLeitores = [];

    public static function Emprestar($livro, $leitor){
        if($livro->getStatusLivro()=="disponivel"){
            $livro->setStatusLivro();
            array_push($leitor->livrosEmprestados,$livro);
        } else{
            echo '<script>alert("Livro não pode ser emprestado")</script>';
        }
        
    }
    public static function Devolver(){
       
    }
    public static function CadastrarLivro($titulo,$autor,$isbn,$ano){
        $argumentos = [
            'titulo' => $titulo,
            'autor' => $autor,
            "isbn" => $isbn,
            "ano" => $ano
        ];
        $livro = new Livro($argumentos);
        array_push(Biblioteca::$listaDeLivros,$livro);
    }
    public static function CadastrarLeitor($nome,$cpf,$email){
        $argumentos = [
            'nome' => $nome,
            'cpf' => $cpf,
            "email" => $email
        ];
        $leitor = new Leitor($argumentos);
        array_push(Biblioteca::$listaDeLeitores,$leitor);
    }
    public static function ConsultarLivro($isbn){
        foreach(Biblioteca::$listaDeLivros as $livro){
            if($livro['']);
        }
        
    }
    public static function ConsultarLeitor($cpf){
        foreach(Biblioteca::$listaDeLeitores as $leitor){
            if($leitor->getCpf == $cpf);
        }
    }
}


Biblioteca::CadastrarLivro("A branca de neve","Irmãos Grimm","978-8581300795"," 2012");
Biblioteca::CadastrarLivro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", "978-8581300801", "2015");
Biblioteca::CadastrarLivro("Dom Quixote", "Miguel de Cervantes", "978-8581300818", "2016");

Biblioteca::CadastrarLeitor('Lara','11111111111','laraeridan@gmail.com'); 
