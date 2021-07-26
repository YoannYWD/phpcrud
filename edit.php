<?php
require "./db.php";
$sql = "SELECT * FROM joueur WHERE id = :id";
$id = $_GET["id"];
$statement = $connection->prepare($sql);
$statement->execute([":id" => $id]);
$joueur = $statement->fetch(PDO::FETCH_OBJ);
if (
    isset($_POST["nom"]) &&
    isset($_POST["numero"]) &&
    isset($_POST["position"])
) {
    $nom = $_POST["nom"];
    $numero = $_POST["numero"];
    $position = $_POST["position"];
    $sql = "UPDATE joueur SET nom=:nom, numero=:numero, position=:position WHERE id=:id";
    $statement = $connection->prepare($sql);
    if ($statement->execute(
        [
            ":nom" => $nom,
            ":numero" => $numero,
            ":position" => $position,
            ":id" => $id
        ]
        )) {
            header("Location: /phpcrud");
    }
}
?>


<?php
include "./head.php";
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3 my-5">
            <h1 class="text-center mb-5">Modifier un joueur</h1>
            
            <?php if(!empty($message)): ?>
                <div class="alert alert-success" role="alert">
                    <?= $message; ?>
                </div>
            <?php endif;?>     

            <form method="post">
              <div class="mb-3">
                <label>Nom</label>
                <input type="text" value="<?= $joueur->nom ?>" name="nom" class="form-control">
              </div>
              <div class="mb-3">
                <label>Numéro</label>
                <input type="number" value="<?= $joueur->numero ?>" name="numero" class="form-control">
              </div>
              <div class="mb-3">
                <label>Position</label>
                <input type="text" value="<?= $joueur->position ?>" name="position" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php
include "./footer.php";
?>