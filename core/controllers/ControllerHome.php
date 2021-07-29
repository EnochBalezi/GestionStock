<?php

namespace Controllers;

class ControllerHome extends Controller
{
    protected $modelName = \Models\Home::class;

    /**
     * 
     *
     * @return void
     */
    public function index()
    {
        $categorie = $this->model->findBy("created_at desc");
        $title = "Home";
        \Renderer::render("home/index", compact('title'));
    }
}
