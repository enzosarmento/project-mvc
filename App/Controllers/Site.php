<?php

namespace App\Controllers;

use App\Models\Crud;

class Site extends Crud
{
    public function home()
    {
        require_once __DIR__ . '/../Views/home.php';
    }

    public function galeria($foto)
    {
        $photo = $foto;
        require_once __DIR__ . '/../Views/galeria.php';
    }
    
    public function cadastro()
    {   
        $register = $this->create();
        require_once __DIR__ . '/../Views/cadastro.php';
    }

    public function consulta()
    {   
        $query = $this->read();
        require_once __DIR__ . '/../Views/consulta.php';
    }

    public function editar()
    {
        $editarForm = $this->editForm();
        require_once __DIR__ . '/../Views/editar.php';
    }

    public function alterar()
    {
        $alterar = $this->update();
        header("Location:?router=Site/Consulta/");
    }

    public function confirmaDelete()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        require_once __DIR__ . '/../Views/confirmaDelete.php';
    }

    public function deletar()
    {
        $deletar = $this->delete();
        header("Location:?router=Site/Consulta/");
        
    }
}