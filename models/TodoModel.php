<?php

namespace models;

use models\base\SQL;

class TodoModel extends SQL
{
  public function __construct()
  {
    parent::__construct('todos', 'id');
  }

  function ajouterTodo($texte)
  {
    $stmt = $this->getPdo()->prepare("INSERT INTO todos (texte) VALUES (?);");
    $stmt->execute([htmlspecialchars($texte)]);
  }
}
