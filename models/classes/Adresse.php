<?php

namespace models\classes;

use models\ClientsModele;

class Adresse
{
  public string $id;
  public string $nom;
  public string $rue;
  public string $codePostal;
  public string $ville;
  public string $clientId;
  public ClientsModele $clientModele;

  public function __construct()
  {
    $this->clientModele = new ClientsModele();
  }

  public function leClient(): Client
  {
    return $this->clientModele->getByClientId($this->clientId);
  }

  public function toString(): string
  {
    return "$this->nom, $this->rue, $this->codePostal, $this->ville";
  }

  /**
   * @return string
   */
  public function getId(): string
  {
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id): void
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getNom(): string
  {
    return $this->nom;
  }

  /**
   * @param string $nom
   */
  public function setNom(string $nom): void
  {
    $this->nom = $nom;
  }

  /**
   * @return string
   */
  public function getRue(): string
  {
    return $this->rue;
  }

  /**
   * @param string $rue
   */
  public function setRue(string $rue): void
  {
    $this->rue = $rue;
  }

  /**
   * @return string
   */
  public function getCodePostal(): string
  {
    return $this->codePostal;
  }

  /**
   * @param string $codePostal
   */
  public function setCodePostal(string $codePostal): void
  {
    $this->codePostal = $codePostal;
  }

  /**
   * @return string
   */
  public function getVille(): string
  {
    return $this->ville;
  }

  /**
   * @param string $ville
   */
  public function setVille(string $ville): void
  {
    $this->ville = $ville;
  }

  /**
   * @return string
   */
  public function getClientId(): string
  {
    return $this->clientId;
  }

  /**
   * @param string $clientId
   */
  public function setClientId(string $clientId): void
  {
    $this->clientId = $clientId;
  }
}
