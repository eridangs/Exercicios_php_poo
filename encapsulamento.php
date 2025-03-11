
<?php

class Carro {
    private $marca = "Chevrolet";
    private $cor;
    
    public function setCor($color) {
        $this->cor = $color;
    }
    
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function getCor() {
        return $this->cor;
    }
}
$carro = new Carro();
$carro-> setCor("Blue");
$carro-> setMarca("Saveiro");
echo $carro-> getCor();
echo $carro-> getMarca();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
</body>
</html>
