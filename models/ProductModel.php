<?php

namespace models;

use models\base\SQL;

class ProductModel extends SQL
{
    public function __construct()
    {
        parent::__construct('produit', 'id');
    }

    function add($nom, $description, $prix)
    {
        $stmt = $this->getPdo()->prepare("INSERT INTO produit (nom, description, prix) VALUES (?, ?, ?);");
        $stmt->execute([htmlspecialchars($nom), htmlspecialchars($description), htmlspecialchars($prix)]);
    }
}
