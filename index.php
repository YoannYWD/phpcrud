<?php 
require "./db.php";
$sql = "SELECT * FROM joueur";
$statement = $connection->prepare($sql);
$statement->execute();
$joueurs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<?php
include "./head.php";
?>

<div class="container my-5">
    <h1 class="text-center mb-5">Liste des joueurs</h1>
  <div class="card mt-5">
    <div class="card-header">
      <h2>Tous les joueurs</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
          <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Numero</th>
              <th>Position</th>
              <th>Action</th>
          </tr>
            <?php foreach($joueurs as $joueur): ?>
          <tr>
            <td><?= $joueur->id; ?></td>
            <td><?= $joueur->nom; ?></td>
            <td><?= $joueur->numero; ?></td>
            <td><?= $joueur->position; ?></td>
            <td>
              <a href="" class="btn btn-info">Editer</a>
              <a href="" class='btn btn-danger'>Supprimer</a>
            </td>
          </tr>
          <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<?php
include "./footer.php";
?>