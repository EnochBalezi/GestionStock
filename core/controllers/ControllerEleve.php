<?php

namespace Controllers;

use Http;

class ControllerEleve extends Controller
{
    protected $modelName = \Models\Eleve::class;

    public function index()
    {
        $eleves = $this->model->findBy("created_at desc");
        $title = "Elèves";
        \Renderer::render("eleve/index", compact('title', 'eleves'));
    }

    /**
     * Affiche un eleve 
     *
     * @return void
     */
    public function show()
    {
        extract($_GET);

        $eleve = $this->model->find($id);
        $title = "Détails de l'élève";
        \Renderer::render("eleve/show", compact('eleve', 'title'));
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $image = $this->upload_file($_FILES['image']);
            $create = $this->model->persist(
                "INSERT INTO eleves(Nom,PostNom,Prenom,Genre,LieuNaiss,DateNaiss,Territoire,Chefferie,Nationalite,Image)VALUES(?,?,?,?,?,?,?,?,?,?)",
                [
                    $nom, $postnom, $prenom, $genre, $lieuNaiss, $dateNaiss, $territoire, $chefferie, $nationalite, $image
                ]
            );
            $message = $this->flash('L\'identification du eleve à réussi avec succé', 'success');
            \Http::redirect('index.php?controller=inscription&task=index');
        }

        $title = "Nouveau Elève";
        \Renderer::render("eleve/create", compact('title'));
    }

    public function edit()
    {

        if (isset($_POST['submit'])) {
            extract($_POST);
            $create = $this->model->persist(
                "UPDATE eleves SET Nom=?,PostNom=?,Prenom=?,Genre=?,LieuNaiss=?,DateNaiss=?,Territoire=?,Chefferie=?,Nationalite=? WHERE Id=?",
                [
                    $nom, $postnom, $prenom, $genre, $lieuNaiss, $dateNaiss, $territoire, $chefferie, $nationalite, $id_eleve
                ]
            );
            $message = $this->flash('L\'identification du eleve à réussi avec succé', 'success');
            \Http::redirect('index.php?controller=eleve&task=index');
        }
        extract($_GET);
        $eleve = $this->model->find($id);
        $title = "Edition de l'élève";
        \Renderer::render("eleve/edit", compact('title', 'eleve'));
    }

    public function delete()
    {
        extract($_GET);
        if (isset($_GET['task']) == "delete") {
            $suppression = $this->model->delete($id);
            $message = $this->flash('La Suppresion du eleve à effectué avec succé', 'success');
            Http::redirect('index.php?controller=eleve&task=index');
        }
    }
}
