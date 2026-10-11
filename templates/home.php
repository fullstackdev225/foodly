<?php if(isset($_SESSION['username'])): ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bievenue sur l'interface de notre plateforme</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="shortcut icon" href="../../icon/foodly-logo.png" type="image/x-icon">
        <script src="https://kit.fontawesome.com/4974ed612a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- ===================== NAVBAR ===================== -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">

        <!-- Brand logo -->
        <a class="navbar-brand" href="home.php">
            <img src="../../icon/foodly-logo.png" alt="Foodly" height="40">
        </a>

        <!-- Mobile toggle button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">

        <!-- Main navigation links (active link underlined in red) -->
        <ul class="navbar-nav mx-auto gap-lg-3">
            <li class="nav-item">
            <a class="nav-link active text-danger border-bottom border-danger border-2" href="#">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark" href="recipes.php">Recettes</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark" href="#">Catégories</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark" href="#">À propos</a>
            </li>
        </ul>

        <!-- Right side: search, notifications, user menu -->
        <div class="d-flex align-items-center gap-3">

            <!-- Search icon button -->
            <button type="button" class="btn border-0 fs-5" aria-label="Rechercher">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <!-- Notifications button with counter badge -->
            <button type="button" class="btn border-0 fs-5 position-relative" aria-label="Notifications">
            <i class="fa-regular fa-bell"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
            </button>

            <!-- User dropdown -->
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center gap-2 text-dark text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fa-solid fa-circle-user text-primary fs-2"></i>
                <i class="fa-solid fa-chevron-down small"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-4 p-2">
                <!-- User info header -->
                <li class="d-flex align-items-center gap-2 px-3 py-2">
                    <i class="fa-solid fa-circle-user text-primary"></i>
                <div>
                    <div class="fw-semibold small"><?php echo $_SESSION['username']; ?></div>
                </div>
                </li>
                <li><hr class="dropdown-divider"></li>

                <!-- Menu items -->
                <li><a class="dropdown-item d-flex align-items-center gap-3 small" href="profil.php"><i class="fa-regular fa-user fa-fw"></i>Mon profil</a></li>
                <li><a class="dropdown-item d-flex align-items-center gap-3 small" href="recipe.php"><i class="fa-solid fa-book-open fa-fw"></i>Mes recettes</a></li>
                <li><a class="dropdown-item d-flex align-items-center gap-3 small" href="#"><i class="fa-solid fa-heart fa-fw"></i>Mes favoris</a></li>
                <li><a class="dropdown-item d-flex align-items-center gap-3 small" href="#"><i class="fa-solid fa-gear fa-fw"></i>Paramètres</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex align-items-center gap-3 small" href="#"><i class="fa-regular fa-circle-question fa-fw"></i>Aide et support</a></li>
                <li><hr class="dropdown-divider"></li>

                <!-- Logout (red) -->
                <li><a class="dropdown-item d-flex align-items-center gap-3 small text-danger" href="#"><i class="fa-solid fa-right-from-bracket fa-fw"></i>Se déconnecter</a></li>
            </ul>
            </div>

        </div>
        </div>
    </div>
    </nav>

<!-- ===================== HERO ===================== -->
<header class="position-relative overflow-hidden bg-light">

  <!-- Background image on the right half (hidden below lg) -->
  <div class="position-absolute top-0 end-0 bottom-0 w-50 d-none d-lg-block">
    <img src="../../images/main_img.png" alt="Pâtes au poulet grillé et légumes" class="w-100 h-100 object-fit-cover">
  </div>

  <!-- Hero content (above the image) -->
  <div class="container position-relative py-5">
    <div class="row">
      <div class="col-lg-6 py-lg-4">

        <!-- Eyebrow tagline with red line -->
        <div class="d-flex align-items-center gap-3 mb-3">
          <hr class="w-25 flex-shrink-0 m-0 border-danger border-2 opacity-100">
          <p class="m-0 small fw-semibold text-uppercase text-secondary">
            Cuisine <span class="text-danger">•</span> Partage <span class="text-danger">•</span> Passion
          </p>
        </div>

        <!-- Title (middle line highlighted in red) -->
        <h1 class="display-5 fw-bold text-dark lh-1 mb-4">
          Découvrez, partagez<br>
          <span class="text-danger">et savourez</span><br>
          les meilleures recettes !
        </h1>

        <!-- Introduction -->
        <p class="text-secondary mb-4 col-xl-9">
          Rejoignez notre communauté de passionnés de cuisine et trouvez des
          recettes délicieuses, simples et authentiques pour tous les goûts.
        </p>

        <!-- Search bar -->
        <form class="mb-4" role="search">
          <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white p-1">
            <span class="input-group-text bg-white border-0 ps-3">
              <i class="fa-solid fa-magnifying-glass text-dark"></i>
            </span>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Rechercher une recette, un ingrédient..." aria-label="Rechercher une recette">
            <button type="submit" class="btn btn-danger rounded-pill px-4" aria-label="Lancer la recherche">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </form>

        <!-- Quick category chips -->
        <div class="d-flex flex-wrap gap-2">
          <a href="#" class="btn btn-white bg-white shadow-sm rounded-pill btn-sm px-3 py-2 d-inline-flex align-items-center gap-2">
            <i class="fa-solid fa-utensils text-danger"></i>Plats principaux
          </a>
          <a href="#" class="btn btn-white bg-white shadow-sm rounded-pill btn-sm px-3 py-2 d-inline-flex align-items-center gap-2">
            <i class="fa-solid fa-cake-candles text-danger"></i>Desserts
          </a>
          <a href="#" class="btn btn-white bg-white shadow-sm rounded-pill btn-sm px-3 py-2 d-inline-flex align-items-center gap-2">
            <i class="fa-solid fa-bowl-food text-danger"></i>Entrées
          </a>
          <a href="#" class="btn btn-white bg-white shadow-sm rounded-pill btn-sm px-3 py-2 d-inline-flex align-items-center gap-2">
            <i class="fa-solid fa-leaf text-success"></i>Végétarien
          </a>
          <a href="#" class="btn btn-white bg-white shadow-sm rounded-pill btn-sm px-3 py-2 d-inline-flex align-items-center gap-2">
            <i class="fa-solid fa-bolt text-danger"></i>Rapides
          </a>
        </div>

      </div>
    </div>
  </div>
</header>

<!-- ===================== POPULAR RECIPES ===================== -->
<section class="container py-5">

  <!-- Section header: title with red underline + "see all" link -->
  <div class="d-flex justify-content-between align-items-end mb-4">
    <div class="d-inline-block">
      <h2 class="h2 fw-bold mb-2">Recettes <span class="text-danger">populaires</span></h2>
      <hr class="w-25 m-0 border-danger border-2 opacity-100">
    </div>
    <a href="recipes.php" class="text-secondary text-decoration-none small">
      Voir toutes les recettes <i class="fa-solid fa-arrow-right ms-1"></i>
    </a>
  </div>

  <!-- Recipe cards grid: 1 / 2 / 3 / 5 columns depending on screen size -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 g-3">

    <!-- Card 1 -->
    <div class="col">
      <article class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="position-relative">
          <div class="ratio ratio-4x3">
            <img src="images/recette-1.jpg" alt="Poisson braisé aux épices et légumes" class="object-fit-cover">
          </div>
          <!-- Favorite button -->
          <button type="button" class="btn btn-light btn-sm rounded-circle position-absolute top-0 end-0 m-2" aria-label="Ajouter aux favoris">
            <i class="fa-solid fa-heart"></i>
          </button>
          <!-- Category badge -->
          <span class="badge rounded-pill bg-danger position-absolute bottom-0 start-0 m-2">Plat principal</span>
        </div>
        <div class="card-body">
          <h3 class="h6 fw-semibold mb-3">Poisson braisé aux épices et légumes</h3>
          <div class="d-flex justify-content-between text-secondary small">
            <span><i class="fa-solid fa-star text-warning me-1"></i>4.8 (124)</span>
            <span><i class="fa-regular fa-clock me-1"></i>45 min</span>
            <span><i class="fa-regular fa-user me-1"></i>4 pers.</span>
          </div>
        </div>
      </article>
    </div>

    <!-- Card 2 -->
    <div class="col">
      <article class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="position-relative">
          <div class="ratio ratio-4x3">
            <img src="images/recette-2.jpg" alt="Riz gras au poulet" class="object-fit-cover">
          </div>
          <button type="button" class="btn btn-light btn-sm rounded-circle position-absolute top-0 end-0 m-2" aria-label="Ajouter aux favoris">
            <i class="fa-solid fa-heart"></i>
          </button>
          <span class="badge rounded-pill bg-danger position-absolute bottom-0 start-0 m-2">Plat principal</span>
        </div>
        <div class="card-body">
          <h3 class="h6 fw-semibold mb-3">Riz gras au poulet</h3>
          <div class="d-flex justify-content-between text-secondary small">
            <span><i class="fa-solid fa-star text-warning me-1"></i>4.6 (98)</span>
            <span><i class="fa-regular fa-clock me-1"></i>40 min</span>
            <span><i class="fa-regular fa-user me-1"></i>4 pers.</span>
          </div>
        </div>
      </article>
    </div>

    <!-- Card 3 -->
    <div class="col">
      <article class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="position-relative">
          <div class="ratio ratio-4x3">
            <img src="images/recette-3.jpg" alt="Fondant au chocolat" class="object-fit-cover">
          </div>
          <button type="button" class="btn btn-light btn-sm rounded-circle position-absolute top-0 end-0 m-2" aria-label="Ajouter aux favoris">
            <i class="fa-solid fa-heart"></i>
          </button>
          <span class="badge rounded-pill bg-primary position-absolute bottom-0 start-0 m-2">Dessert</span>
        </div>
        <div class="card-body">
          <h3 class="h6 fw-semibold mb-3">Fondant au chocolat</h3>
          <div class="d-flex justify-content-between text-secondary small">
            <span><i class="fa-solid fa-star text-warning me-1"></i>4.7 (87)</span>
            <span><i class="fa-regular fa-clock me-1"></i>30 min</span>
            <span><i class="fa-regular fa-user me-1"></i>2 pers.</span>
          </div>
        </div>
      </article>
    </div>

    <!-- Card 4 -->
    <div class="col">
      <article class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="position-relative">
          <div class="ratio ratio-4x3">
            <img src="images/recette-4.jpg" alt="Soupe de légumes maison" class="object-fit-cover">
          </div>
          <button type="button" class="btn btn-light btn-sm rounded-circle position-absolute top-0 end-0 m-2" aria-label="Ajouter aux favoris">
            <i class="fa-solid fa-heart"></i>
          </button>
          <span class="badge rounded-pill bg-success position-absolute bottom-0 start-0 m-2">Entrée</span>
        </div>
        <div class="card-body">
          <h3 class="h6 fw-semibold mb-3">Soupe de légumes maison</h3>
          <div class="d-flex justify-content-between text-secondary small">
            <span><i class="fa-solid fa-star text-warning me-1"></i>4.5 (65)</span>
            <span><i class="fa-regular fa-clock me-1"></i>25 min</span>
            <span><i class="fa-regular fa-user me-1"></i>4 pers.</span>
          </div>
        </div>
      </article>
    </div>

    <!-- Card 5 -->
    <div class="col">
      <article class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="position-relative">
          <div class="ratio ratio-4x3">
            <img src="images/recette-5.jpg" alt="Pancakes moelleux aux fruits rouges" class="object-fit-cover">
          </div>
          <button type="button" class="btn btn-light btn-sm rounded-circle position-absolute top-0 end-0 m-2" aria-label="Ajouter aux favoris">
            <i class="fa-solid fa-heart"></i>
          </button>
          <span class="badge rounded-pill bg-primary position-absolute bottom-0 start-0 m-2">Dessert</span>
        </div>
        <div class="card-body">
          <h3 class="h6 fw-semibold mb-3">Pancakes moelleux</h3>
          <div class="d-flex justify-content-between text-secondary small">
            <span><i class="fa-solid fa-star text-warning me-1"></i>4.8 (112)</span>
            <span><i class="fa-regular fa-clock me-1"></i>20 min</span>
            <span><i class="fa-regular fa-user me-1"></i>3 pers.</span>
          </div>
        </div>
      </article>
    </div>

  </div>
</section>

<!-- ===================== CALL TO ACTION ===================== -->
<section class="container pb-5">
  <div class="bg-danger-subtle rounded-4 p-4 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">

    <!-- Icon + text -->
    <div class="d-flex align-items-center gap-4 text-center text-md-start flex-column flex-md-row">
      <i class="fa-solid fa-hat-chef text-danger display-4"></i>
      <div>
        <h2 class="h5 fw-bold mb-1">Envie de partager votre recette ?</h2>
        <p class="small text-secondary mb-0">
          Rejoignez notre communauté et faites découvrir vos meilleures créations culinaires !
        </p>
      </div>
    </div>

    <!-- Publish button -->
    <a href="#" class="btn btn-danger btn-lg rounded-pill px-4 d-inline-flex align-items-center gap-2">
      <i class="fa-solid fa-pen"></i>
      Publier une recette
    </a>

  </div>
</section>
        
        <script src="../../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
<?php endif; ?>