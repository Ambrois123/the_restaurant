<?php



ob_start();
?>
<main class="container">
    <form action="<?=URL?>/admin/dessert/validate" method="post">
    <div class="row g-3">
  <div class="col">
    <label for="title">Nom</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="col">
  <label for="description">Description</label>
    <input type="text" class="form-control" name="description" >
  </div>
  <div class="col">
  <label for="price">Prix</label>
    <input type="number" min="1" class="form-control" name="price" step="any" >
  </div>
</div>
<div class="mt-3" >
    <button type="submit" class="btn btn-primary">Valider</button>
  </div>
    </form>
</main>


<?php
$titre = "<h1>Ajout d'un dessert</h1>";
$content = ob_get_clean();
require_once 'adminTemplate.php';

?>