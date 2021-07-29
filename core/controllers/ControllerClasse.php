<?php

namespace Controllers;

class ControllerClasse extends Controller
{
    protected $modelName = \Models\Classe::class;

    public function index()
    {
        $classes = $this->model->findBy('created_at');
        $title = "Classes";
        \Renderer::render('classe/index', compact('title', 'classes'));
    }

    public function show()
    {
        extract($_GET);
        $classe = $this->model->find($id);
        $title = "Visualisation de la classe";
        \Renderer::render('classe/show', compact('title', 'classe'));
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $Insert = $this->model->persist("INSERT INTO classes(Intituler,Place)VALUES(?,?)", [$intituler, $place]);
            \Http::redirect('index.php?controller=classe&task=index');
        }
        $title = "Nouveau classe";
        \Renderer::render('classe/create', compact('title'));
    }

    public function edit()
    {
        extract($_GET);

        if (isset($_POST['submit'])) {
            extract($_POST);
            $Insert = $this->model->persist("UPDATE classes SET Intituler=?,Place=? WHERE Id=?", [$intituler, $place, $id_classe]);
            \Http::redirect('index.php?controller=classe&task=index');
        }
        $classe = $this->model->find($id);
        $title = "Edition de la classe";
        \Renderer::render('classe/edit', compact('title', 'classe'));
    }

    public function delete()
    {
        extract($_GET);
        if (isset($_GET['task']) == "delete") {
            $suppression = $this->model->delete($id);
            $message = $this->flash('La Suppresion du produit à effectué avec succé', 'success');
            \Http::redirect('index.php?controller=Classe&task=index');
        }
    }
}
