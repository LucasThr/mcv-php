<?php

namespace controllers;

use controllers\base\WebController;
use models\ProductModel;
use utils\Template;

class ProductController extends WebController
{
  private $productModel;

  function __construct()
  {
    $this->productModel = new ProductModel();
  }

  function store()
  {
    $products = $this->productModel->getAll();
    return Template::render("views/products/store.php", ["products" => $products]);
  }

  function add($nom = "", $description = "", $prix = "")
  {
    if ($nom != "" && $description != "" && $prix != "") {
      $this->productModel->add($nom, $description, $prix);
    }

    $this->redirect("/products");
  }

  function delete($id = "")
  {
    if ($id != "") {
      $this->productModel->deleteOne($id);
    }

    $this->redirect('/products');
  }
}
