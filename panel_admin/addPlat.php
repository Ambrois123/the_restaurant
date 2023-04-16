<?php



ob_start();
?>
<main class="container">
    <form action="<?=URL?>/admin/plat/validate" method="post" enctype="multipart/form-data">
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
    <input type="number" min="1" step="0.01" class="form-control" name="price" >
  </div>
  <div class="col">
  <label for="image">Image</label>
    <input type="file" min="1" class="form-control" name="image" >
  </div>
</div>
<div class="mt-3" >
    <button type="submit" class="btn btn-primary">Valider</button>
  </div>
    </form>
</main>


<?php
$titre = "<h1>Ajout d'un plat</h1>";
$content = ob_get_clean();
require_once 'adminTemplate.php';

?>