<?php

namespace routes;

use controllers\ClientController;
use controllers\FicheController;
use controllers\ProductController;
use controllers\SampleWebController;
use controllers\TodoWeb;
use routes\base\Route;
use utils\Template;

class Web
{
  function __construct()
  {
    $main = new SampleWebController();
    $clientControleur = new ClientController();
    $ficheControleur = new FicheController();

    // Appel la méthode « home » dans le contrôleur $main.
    Route::Add('/', [$main, 'home']);
    Route::Add('/exemple', [$main, 'exemple']);
    Route::Add('/clients', [$clientControleur, 'liste']);
    Route::Add('/client/{id}/show', [$ficheControleur, 'fiche']);
    Route::Add('/client/{id}/update', [$ficheControleur, 'update']);
    Route::Add('/client/{id}/delete', [$ficheControleur, 'delete']);

    $todo = new TodoWeb();
    Route::Add('/todo/liste', [$todo, 'liste']);
    Route::Add('/todo/ajouter', [$todo, 'ajouter']);
    Route::Add('/todo/terminer', [$todo, 'terminer']);
    Route::Add('/todo/supprimer', [$todo, 'supprimer']);

    $productController = new ProductController();
    Route::Add("/products", [$productController, "store"]);
    Route::Add("/products/add", [$productController, "add"]);
    Route::Add("/products/delete/{id}", [$productController, "delete"]);

    // Appel la fonction inline dans le routeur.
    // Utile pour du code très simple, où un tes, l'utilisation d'un contrôleur est préférable.
    Route::Add('/about', function () {
      return Template::render('views/global/about.php');
    });
  }
}
