<?php
require_once('./biblioteca.php');
if(isset($_POST["titulo"],$_POST["autor"],$_POST["isbn"],$_POST["ano"])){
    Biblioteca::CadastrarLivro($_POST['titulo'],$_POST['autor'],$_POST['isbn'],$_POST['ano']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Biblioteca</h1>
    <div id="livros">
        <?php
            foreach(Biblioteca::$listaDeLivros as $livroAtual){
                echo '<div class="livro">';
                    echo '<h2>' . $livroAtual->getTitulo().'</h2>';
                echo '</div>';
            }
        ?>
    </div>
    <form action="POST">
        <label for="">Titulo do livro</label>
        <input type="text" name="titulo">
        <label for="">Autor do livro</label>
        <input type="text" name="autor">
        <label for="">Isbn do livro</label>
        <input type="text" name="isbn">
        <label for="">Ano do livro</label>
        <input type="text" name="ano">
        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>