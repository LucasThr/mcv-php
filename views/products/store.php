<div class="container p-3">
  <div class="card">
    <div class="card-body p-2">
      <!-- Action -->
      <form action="/products/add" method="post" class="row">
        <div class="col-3">
          <input name="nom" type="text" class="form-control" placeholder="Nom" require />
        </div>
        <div class="col-5">
          <input name="description" type="text" class="form-control" placeholder="Description" require />
        </div>
        <div class="col-2">
          <input name="prix" type="number" class="form-control" placeholder="Prix" require />
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-primary" style="width: 100%">Ajouter</button>
        </div>
      </form>

      <!-- Liste -->

      <div class="container mt-5">
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
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($products as $product) : ?>
                    <tr>
                      <th scope="row"><?= $product->id ?></th>
                      <td><?= $product->nom ?></td>
                      <td><?= substr($product->description, 0, 48) ?>...</td>
                      <td><?= $product->prix ?> €</td>
                      <td>
                        <a href="/products/delete/<?= $product->id ?>" class="text-danger">Supprimer</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>