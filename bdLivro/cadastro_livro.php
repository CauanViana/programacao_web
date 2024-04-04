<?php
require_once 'livros.php';

function cria($livro)
{
    $delimitador = "@#@";
    $linha = $livro->getTitulo() . $delimitador .
        $livro->getAutor() . $delimitador .
        $livro->getEditora() . $delimitador .
        $livro->getAno() . $delimitador;

    $bd = fopen("livros.txt", "a+");

    if (filesize("livros.txt") > 0)
        $linha = "\n" . $linha;
    fwrite($bd, $linha);
    fclose($bd);

    print("Cadastro realizado com sucesso");
}

$livro = new Livros();
$livro->setTitulo($_POST["titulo"]);
$livro->setAutor($_POST["autor"]);
$livro->setEditora($_POST["editora"]);
$livro->setAno($_POST["ano"]);

cria($livro);
?>