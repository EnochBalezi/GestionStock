<?php

namespace Controllers;

class ControllerInscription extends Controller
{
    protected $modelName = \Models\Inscription::class;

    public function index()
    {
        $inscriptions = $this->model->findBy("Inscription", "DateInsc desc");
        $title = "Inscription";
        \Renderer::render("inscription/index", compact('title', 'inscriptions'));
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $inscription = $this->model->persist(
                "INSERT INTO inscriptions(DateInsc,Classe,Eleve,Option_Id)VALUES(?,?,?,?)",
                [
                    $date, $classe, $eleve, $option
                ]
            );
            \Http::redirect('index.php?controller=inscription&task=create');
        }

        $classe = $this->model->findBy("classes", "created_at desc");
        $eleve = $this->model->findBy("eleves", "created_at desc");
        $option = $this->model->findBy("options", "created_at desc");
        $title = "Nouvelle Inscription";
        \Renderer::render("inscription/create", compact('title', 'classe', 'eleve', 'option'));
    }
}
