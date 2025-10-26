<?php
include 'includes/db.php';
include 'includes/session.php';
include 'includes/functions.php';
?>

<!doctype html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CineVivo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-2">
      <!-- Sidebar filtri -->
      <h5>Categorie</h5>
      <ul class="list-group">
        <?php foreach(getCategories($conn) as $cat): ?>
        <li class="list-group-item"><a href="#"><?= htmlspecialchars($cat['name']) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="col-md-10">
      <!-- Sezioni rapide -->
      <h4>Film Recenti</h4>
      <div class="row">
        <?php foreach(getContentsBySection($conn, 'recent') as $c): ?>
        <div class="col-md-3 mb-3">
          <div class="card h-100">
            <img src="assets/img/<?= $c['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($c['title']) ?>">
            <div class="card-body">
              <h6 class="card-title"><?= htmlspecialchars($c['title']) ?></h6>
              <p class="card-text"><?= htmlspecialchars(substr($c['description'],0,50)) ?>...</p>
              <a href="movie.php?id=<?= $c['id'] ?>" class="btn btn-sm btn-primary">Guarda</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <h4>Film Consigliati</h4>
      <div class="row">
        <?php foreach(getContentsBySection($conn, 'recommended') as $c): ?>
        <div class="col-md-3 mb-3">
          <div class="card h-100">
            <img src="assets/img/<?= $c['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($c['title']) ?>">
            <div class="card-body">
              <h6 class="card-title"><?= htmlspecialchars($c['title']) ?></h6>
              <p class="card-text"><?= htmlspecialchars(substr($c['description'],0,50)) ?>...</p>
              <a href="movie.php?id=<?= $c['id'] ?>" class="btn btn-sm btn-primary">Guarda</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <?php if(isset($_SESSION['user_id'])): ?>
      <h4>I tuoi Preferiti</h4>
      <div class="row">
        <?php foreach(getContentsBySection($conn, 'favorites') as $c): ?>
        <div class="col-md-3 mb-3">
          <div class="card h-100">
            <img src="assets/img/<?= $c['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($c['title']) ?>">
            <div class="card-body">
              <h6 class="card-title"><?= htmlspecialchars($c['title']) ?></h6>
              <p class="card-text"><?= htmlspecialchars(substr($c['description'],0,50)) ?>...</p>
              <a href="movie.php?id=<?= $c['id'] ?>" class="btn btn-sm btn-primary">Guarda</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
