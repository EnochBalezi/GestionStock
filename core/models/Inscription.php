<?php

namespace Models;

class Inscription extends Model
{
    protected $table = "Inscriptions";

    public function findBy($table, string $order = ''): array
    {
        $req = "SELECT * FROM " . $table;
        if ($order) {
            $req .= " ORDER BY " . $order;
        }
        $sql = $this->pdo->query($req);
        $resultat = $sql->fetchAll();
        return $resultat;
    }
}
