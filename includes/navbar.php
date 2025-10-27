<?php
include_once 'session.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">🎬 CineVivo</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <?php if(isLoggedIn()): ?>
          <li class="nav-item"><a class="nav-link" href="profile.php">Profilo</a></li>
          <?php if(isAdmin()): ?>
            <li class="nav-item"><a class="nav-link" href="admin/dashboard.php">Admin</a></li>
          <?php endif; ?>
        <?php endif; ?>
      </ul>

      <ul class="navbar-nav">
        <?php if(!isLoggedIn()): ?>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Registrati</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
