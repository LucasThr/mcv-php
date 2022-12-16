<?php

namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use utils\Template;

class FicheController extends WebController
{

  function __construct()
  {
    $this->clientModele = new ClientsModele();
  }
  public function fiche($id = "")
  {

    $id = $_GET['id'] ?? $id;
    $client = $this->clientModele->getByClientId($id);
    $produits = $client->lesProduits();
    $adresses = $client->lesAdresses();
    // Récupération du client avec 1 comme identifiant.

    // À compléter avec les bons appels de méthode.
    return Template::render("views/fiche.php", array("client" => $client, "produits" => $produits, "adresses" => $adresses));
  }

  function update($id, $nom, $prenom, $telephone, $email)
  {
    if ($id != "" && $nom != "" && $prenom != "" && $telephone != "" && $email != "") {
      $this->clientModele->updateOne($id, ["nom" => $nom, "prenom" => $prenom, "telephone" => $telephone, "email" => $email]);
    }

    $this->redirect("/client/{$id}/show");
  }

  function delete($id = "")
  {
    var_dump($id);
    if ($id != "") {
      $this->clientModele->deleteOne($id);
    }

    $this->redirect("/clients");
  }
}
