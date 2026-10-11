<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrivez-vous dès maintenant - Foodly</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icon/foodly-logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4974ed612a.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Signup section: split layout (form on the left, image on the right) -->
    <section class="container-fluid bg-light overflow-hidden">
    <div class="row min-vh-100">

        <!-- Left column: signup content -->
        <div class="col-lg-6 d-flex align-items-center py-5">
        <div class="px-4 px-md-5 w-100">

            <!--foodly icon-->
            <img src="../../icon/foodly-logo.png" alt="foodly-icon" class="w-50 mb-3">

            <!-- Eyebrow tagline with red line -->
            <div class="d-flex align-items-center gap-3 mb-3">
            <hr class="w-25 flex-shrink-0 m-0 border-danger border-2 opacity-100">
            <p class="m-0 small fw-semibold text-uppercase text-secondary">
                Cuisine <span class="text-danger">•</span> Partage <span class="text-danger">•</span> Passion
            </p>
            </div>

            <!-- Page title (second line highlighted in red) -->
            <h1 class="display-3 fw-bold text-dark lh-1 mb-4">
            Créer votre<br>
            <span class="text-danger">compte</span>
            </h1>

            <!-- Short introduction -->
            <p class="text-secondary mb-4 col-xl-10">
            Rejoignez notre communauté de passionnés de cuisine et partagez vos
            meilleures recettes avec des milliers de gourmands !
            </p>

           <?php signup(); ?>

            <!-- Signup form -->
            <form method="POST" class="col-xl-10">

            <!-- Last name field -->
            <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white mb-3">
                <span class="input-group-text bg-white border-0 ps-4">
                <i class="fa-regular fa-user fa-fw text-dark"></i>
                </span>
                <input type="text" class="form-control border-0 shadow-none" id="lastname" name="lastname" placeholder="Nom" aria-label="Nom" required aria-required="true">
            </div>

            <!-- First name field -->
            <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white mb-3">
                <span class="input-group-text bg-white border-0 ps-4">
                <i class="fa-regular fa-user fa-fw text-dark"></i>
                </span>
                <input type="text" class="form-control border-0 shadow-none" id="firstname" name="firstname" placeholder="Prénom" aria-label="Prénom" required aria-required="true">
            </div>

            <!-- Email field -->
            <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white mb-3">
                <span class="input-group-text bg-white border-0 ps-4">
                <i class="fa-regular fa-envelope fa-fw text-dark"></i>
                </span>
                <input type="email" class="form-control border-0 shadow-none" id="email" name="email" placeholder="Adresse e-mail" aria-label="Adresse e-mail" required aria-required="true">
            </div>

            <!-- Username field -->
            <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white mb-3">
                <span class="input-group-text bg-white border-0 ps-4">
                <i class="fa-regular fa-user fa-fw text-dark"></i>
                </span>
                <input type="text" class="form-control border-0 shadow-none" id="username" name="username" placeholder="Nom d'utilisateur" aria-label="Nom d'utilisateur" required aria-required="true">
            </div>

            <!-- Password field with show/hide button -->
            <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white mb-3">
                <span class="input-group-text bg-white border-0 ps-4">
                <i class="fa-solid fa-lock fa-fw text-dark"></i>
                </span>
                <input type="password" class="form-control border-0 shadow-none" minlength="8" id="password" name="password" placeholder="Mot de passe" aria-label="Mot de passe" required aria-required="true">
                <button type="button" class="btn bg-white border-0 pe-4 text-secondary" aria-label="Afficher le mot de passe">
                <i class="fa-regular fa-eye"></i>
                </button>
            </div>

            <!-- Confirm password field with show/hide button -->
            <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white mb-4">
                <span class="input-group-text bg-white border-0 ps-4">
                <i class="fa-solid fa-lock fa-fw text-dark"></i>
                </span>
                <input type="password" class="form-control border-0 shadow-none" id="confirmPassword" name="confirmPassword" placeholder="Confirmer le mot de passe" aria-label="Confirmer le mot de passe" required aria-required="true">
                <button type="button" class="btn bg-white border-0 pe-4 text-secondary" aria-label="Afficher le mot de passe">
                <i class="fa-regular fa-eye"></i>
                </button>
            </div>

            <!-- Main submit button -->
            <button type="submit" name="btn-signup" id="btn-signup" class="btn btn-danger btn-lg w-100 rounded-pill d-flex align-items-center justify-content-center gap-2 mb-4">
                <i class="fa-solid fa-user-plus"></i>
                S'inscrire
            </button>

            <!-- Divider: "Already have an account?" -->
            <div class="d-flex align-items-center gap-3 text-secondary small mb-3 px-5">
                <hr class="flex-grow-1 m-0">
                <span>Déjà un compte ?</span>
                <hr class="flex-grow-1 m-0">
            </div>

            <!-- Secondary button: link to the login page -->
            <div class="text-center">
                <a href="login.php" class="btn btn-outline-secondary btn-lg rounded-pill bg-white text-dark px-5 d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-right-to-bracket"></i>
                Se connecter
                </a>
            </div>

            </form>

        </div>
        </div>

        <!-- Right column: image (hidden on screens smaller than lg) -->
        <div class="col-lg-6 p-0 d-none d-lg-block">
            <img src="../../images/sign_img.png" alt="Légumes frais, herbes et épices sur une planche en bois" class="w-100 h-100 object-fit-cover">
        </div>

    </div>
    </section>

    <script src="../../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>