<?php

class Http
{

    public static function redirect($path, array $variables = [])
    {
        extract($variables);
        header('Location:' . $path);
    }
}
