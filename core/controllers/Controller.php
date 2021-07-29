<?php

namespace Controllers;

abstract class Controller
{
    protected $modelName;
    protected $model;

    public function __construct()
    {
        $this->model = new $this->modelName();
    }

    public function upload_file($file)
    {
        if (isset($file)) {
            $extension = explode('.', $file["name"]);
            $new_name = rand() . '.' . $extension[1];
            $destination = 'public/img/' . $new_name;
            move_uploaded_file($file['tmp_name'], $destination);
            return $new_name;
        }
    }

    public function flash(string $message, string $type)
    {
        echo "
            <div class='message message-" . $type . "'>
                <h4>" . $message . "</h4>
            </div>
        ";
    }
}
