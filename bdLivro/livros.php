<?php

class Livros
{
    private $titulo;
    private $autor;
    private $editora;
    private $ano;
    public function __construct()
    {
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getEditora()
    {
        return $this->editora;
    }
    public function getAno()
    {
        return $this->ano;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function setEditora($editora)
    {
        $this->editora = $editora;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
}
?>