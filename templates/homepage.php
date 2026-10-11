<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur notre plateforme de partage de recettes</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="icon/foodly-logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4974ed612a.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="container-fluid bg-light overflow-hidden">
        <div class="row min-vh-100">

            <div class="col-lg-6 d-flex align-items-center py-5">
            <div class="px-4 px-md-5 w-100">

                <img src="icon/foodly-logo.png" class="w-50 mb-3" alt="foodly icon">
                <div class="d-flex align-items-center gap-3 mb-3">
                <hr class="w-25 flex-shrink-0 m-0 border-danger border-2 opacity-100">
                <p class="m-0 small fw-semibold text-uppercase text-secondary">
                    Cuisine <span class="text-danger">•</span> Partage <span class="text-danger">•</span> Passion
                </p>
                </div>

                <h1 class="display-3 fw-bold text-dark lh-1 mb-4">
                Bienvenue sur<br>
                <span class="text-danger">Foodly !</span>
                </h1>

                <p class="lead text-secondary mb-4 col-xl-10">
                Découvrez des milliers de recettes délicieuses, simples et accessibles,
                partagées par une communauté de passionnés de cuisine. Inspirez-vous,
                cuisinez et faites voyager vos papilles !
                </p>

                <div class="d-flex flex-wrap gap-3 mb-5">
                <a href="src/controllers/signup.php" class="btn btn-danger btn-lg rounded-pill px-4 d-inline-flex align-items-center gap-2">
                    Inscription
                </a>
                <a href="src/controllers/login.php" class="btn btn-outline-secondary btn-lg rounded-pill px-4 d-inline-flex align-items-center gap-2">
                    Connexion
                </a>
                </div>

                <div class="row g-0">
                <div class="col-4 pe-3 border-end">
                    <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger-subtle text-danger p-3 mb-2">
                        <i class="fa-solid fa-bowl-food fa-fw fs-5"></i>
                    </span>
                    <h2 class="h6 fw-bold mb-1">Recettes variées</h2>
                    <p class="small text-secondary mb-0">Du traditionnel<br>au moderne</p>
                </div>

                <div class="col-4 px-3 border-end">
                    <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger-subtle text-danger p-3 mb-2">
                    <i class="fa-solid fa-users fa-fw fs-5"></i>
                    </span>
                    <h2 class="h6 fw-bold mb-1">Une communauté</h2>
                    <p class="small text-secondary mb-0">Des passionnés<br>comme vous</p>
                </div>

                <div class="col-4 ps-3">
                    <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger-subtle text-danger p-3 mb-2">
                    <i class="fa-regular fa-heart fa-fw fs-5"></i>
                    </span>
                    <h2 class="h6 fw-bold mb-1">Des plats pour tous</h2>
                    <p class="small text-secondary mb-0">Tous les goûts,<br>toutes les occasions</p>
                </div>
                </div>

            </div>
            </div>

            <div class="col-lg-6 p-0 d-none d-lg-block">
                <img src="images/main_img.png" alt="Poulet grillé, légumes et riz dans un plat" class="w-100 h-100 object-fit-cover">
            </div>

        </div>
    </section>
</body>
</html>