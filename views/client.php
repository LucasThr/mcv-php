 <div class="container my-5">
   <div class="row">
     <div class="card">
       <div class="card-body">
         <table class="table">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Actions</th>
             </tr>
           </thead>
           <tbody>
             <?php foreach ($clients as $client) { ?>

               <tr>
                 <th scope="row"><?= $client->id ?></th>
                 <td><?= $client->nom ?></td>
                 <td><?= $client->email ?></td>
                 <td>
                   <a href="/client/<?= $client->id ?>/show">Voir</a> &nbsp;
                   <a href="/client/<?= $client->id ?>/delete" class="text-danger">Supprimer</a>
                 </td>
               </tr>
             <?php } ?>

           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>