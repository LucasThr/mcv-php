<div class="container mt-5">

  <div class="mt-5">

    <h4>
      Données générales
    </h4>
    <p class="mt-2 mb-2">
      <a href="/client/<?= $client->id ?>/delete" class="text-danger">Supprimer</a>
    </p>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <form action="/client/<?= $client->id ?>/update" method="POST" class="row g-3">
            <div class="col-md-6">
              <label for="nom" class="form-label">Nom</label>
              <input name="nom" value="<?= $client->nom ?>" type="text" class="form-control" id="nom">
            </div>
            <!-- <input name="id" type=":" value="<?= $client->nom ?>" type="text" class="form-control" id="nom"> -->

            <div class="col-md-6">
              <label for="prenom" class="form-label">Prénom</label>
              <input name="prenom" value="<?= $client->prenom ?>" type="text" class="form-control" id="prenom">
            </div>
            <div class="col-md-6">
              <label for="inputEmail" class="form-label">Email</label>
              <input name="email" value="<?= $client->email ?>" type="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-6">
              <label for="inputTelephone" class="form-label">Téléphone</label>
              <input name="telephone" value="<?= $client->telephone ?>" type="text" class="form-control" id="inputTelephone">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5">
    <h4>
      Les produits
    </h4>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Prix</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($produits as $produit) { ?>

                <tr>
                  <th scope="row"><?= $produit->id ?></th>
                  <td><?= $produit->nom ?></td>
                  <td><?= $produit->description ?></td>
                  <td><?= $produit->prix ?></td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5">
    <h4>
      Les adresses
    </h4>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Rue</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($adresses as $adresse) { ?>
                <tr>
                  <th scope="row"><?= $adresse->id ?></th>
                  <td><?= $adresse->nom ?></td>
                  <td><?= $adresse->rue ?></td>
                  <td><?= $adresse->codePostal ?></td>
                  <td><?= $adresse->ville ?></td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>