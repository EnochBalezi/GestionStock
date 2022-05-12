<?php

namespace Models;

use Exception;

abstract class Model
{
    public $pdo;
    protected $table;
    private $message;
    private $data = [];

    public function __construct()
    {
        $this->pdo = \DataBase::getPdo();
    }

    /**
     * Recupere tous les élèments 
     *
     * @return array
     */
    public function findAll(): array
    {
        try {
            $data = [];
            $sql = $this->pdo->prepare("SELECT * FROM {$this->table}");
            $sql->execute();
            $resultat = $sql->fetchAll();
            if ($resultat) {
                $data[] = $resultat;
            }
        } catch (Exception $exception) {
            $this->message = $exception;
        }
        return $data;
    }
    /**
     * recupere un element dans la base des donnees 
     *
     * @param int $id
     * @return void
     */
    public function findById(int $id): array
    {
        $data = [];
        $sql = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id=:id_table");
        $sql->execute(['id_table' => $id]);
        $resultat = $sql->fetch();
        if ($resultat) {
            $data[] = $resultat;
        }
        return $data;
    }

    /**
     * recupere tous les données dans une table
     *
     * @param string $order
     * @return array
     */
    public function find(string $order = ''): array
    {

        try {
            $req = "SELECT * FROM {$this->table}";
            if ($order) {
                $req .= " ORDER BY " . $order;
            }
            $sql = $this->pdo->query($req);
            $resultat = $sql->fetchAll();
            if ($resultat >= 0) {
                $this->data = $resultat;
            }
        } catch (Exception $exception) {
            $this->message = $exception;
        }
        return $this->data;
    }

    public function findByRequette(string $statement): array
    {
        try {
            $req = $this->pdo->query("SELECT *from $statement");
            $resultat = $req->fetch();
            if ($resultat >= 0) {
                $this->data = $resultat;
            }
        } catch (Exception $exception) {
            $this->message = $exception;
        }
        return $this->data;
    }

    /**
     * Enregistrement des donnees
     *
     * @param string $statement
     * @param [type] $variables
     * @return void
     */
    public function persist(string $statment, $variables)
    {
        $req = $this->pdo->prepare($statment);
        $resultat = $req->execute($variables);
        return $resultat;
    }

    public function delete($variables)
    {
        $req = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id=:id");
        $resultat = $req->execute(['id' => $variables]);
        return $resultat;
    }
}
