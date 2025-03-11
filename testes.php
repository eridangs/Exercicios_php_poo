<?php

class Galinha{
    public $ossos_porosos;
    public $penas;
    public $bico;
    private $crista;

    public function botarOvos($ovos){
        echo 'botar '. $ovos. ' ovinhos...pópó '.'<br>';
    }

    public function alimentar_se($quantidade,$alimento){
        echo "galinha se alimentou de ". $quantidade. ' '.  $alimento. ' <br> '; 
    }

    public function setCrista($crista){
        $this->crista = $crista;
    }
    public function getCrista(){
        return $this->crista;
    }

}


// $lola = new Galinha();
// $lola->botarOvos(3);
// $lola->alimentar_se(200,'milhos');
// $lola->ossos_porosos = true;
// $lola->penas = 200;
// $lola->bico = true;
// $lola->setCrista(false);
// $lola->getCrista();
// var_dump($lola);

class  Livro{
    private $titulo;
    private $genero;
    private $autor;
    private $paginas;
    private $editora;

    public function __construct($titulo,$genero,$autor,$paginas,$editora){
        $this->autor = $autor;
        $this->editora = $editora;
        $this->titulo = $titulo;    
        $this->genero = $genero;
        $this->paginas = $paginas;
    }

    public function getTitulo(){
    return $this->titulo;
    }
    
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
    public function getGenero(){
        return $this->genero;
    }
    
    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getInfos(){
        return "O título do livro é ". $this->titulo. ", do gênero ". $this->genero. ", e do autor ". $this->autor;
    }
}

$livro1 = new Livro('1984',
'ficção',
'George Orwell',
336,
'Grupo Companhia das Letras');

$livro2 = new Livro('Branca de neve','Conto de fadas',' ',200,'Disney');
$livro2->setTitulo('Rapunzel');
// echo '<pre>';
// var_dump($livro2);
// echo '</pre>';

class Animal{

    public $alimentacao = true;
    public $colunaVertebral = true;
    protected $habitat;

    public function __construct($habitat){
        $this->$habitat = $habitat;
    }
    public function alimentar_se(){
        echo "se alimentou";
    }
}

class Mamiferos extends Animal{
    public function Mamar(){
        echo 'mama';
    }
}

class Baleia extends Mamiferos{
    public $marinho;
    public $nadadeira; 
    public function __construct($marinho, $nadadeira){
        $this->marinho = $marinho;
        $this->nadadeira = $nadadeira;
    }
    public function alimentar_se(){
        echo 'comeu peixe';
    } 
    public function Nadar(){
        echo 'nada no oceano';
    }
}

class Morcego extends Mamiferos{
    public $aereo;
    public $braçosAsas;
    public $poliniza;
    public function Voar(){
        echo 'voa no céu';
    }
    public function alimentar_se(){
        echo 'chupou sangue';
    }
}

class Ornitorrinco extends Mamiferos{
    public $oviparo;
    public $espinhosVenenosos;

    public $brilhanoEscuro;

    public function __construct($alimentacao,$oviparo,$espinhosVenenosos,$brilhanoEscuro,$habitat){
        $this->alimentacao = $alimentacao;
        $this->oviparo = $oviparo;
        $this->espinhosVenenosos = $espinhosVenenosos;
        $this->brilhanoEscuro = $brilhanoEscuro;
        $this->habitat = $habitat;
    }

    public function BotarOvos(){
        echo '<br> bota ovos';
    }
}

// $ornitorrinco = new Ornitorrinco('carnivoro',true,true,true,"semiaquatico");
// echo '<pre>';
// var_dump($ornitorrinco);
// echo '</pre>';

$mobydick = new Baleia(true,true);
$batmam = new Morcego('terrestre');
$animalqualquer = new Animal('terrestre');

$mobydick->alimentar_se();
echo '<br>';
$batmam->alimentar_se();
echo '<br>';
$animalqualquer->alimentar_se();
?>
