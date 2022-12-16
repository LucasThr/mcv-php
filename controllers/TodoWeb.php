<?php

namespace controllers;

use controllers\base\WebController;
use models\TodoModel;
use utils\Template;

class TodoWeb extends WebController
{
  private $todoModel;

  function __construct()
  {
    $this->todoModel = new TodoModel();
  }

  function liste()
  {
    $todos = $this->todoModel->getAll();
    return Template::render("views/todos/liste.php", array('todos' => $todos));
  }

  function ajouter($texte = "")
  {
    if ($texte != "") {
      $this->todoModel->ajouterTodo($texte);
    }
    $this->redirect("/todo/liste");
  }

  function terminer($id = "")
  {
    if ($id != "") {
      $this->todoModel->updateOne($id, ["termine" => 1]);
    }
    $this->redirect("/todo/liste");
  }

  function supprimer($id = "")
  {
    if ($id == "") {
      $this->redirect('/todo/liste');
      return;
    }

    $todo = $this->todoModel->getOne($id);
    if ($todo->termine) {
      $this->todoModel->deleteOne($todo->id);
    }

    $this->redirect('/todo/liste');
  }
}
