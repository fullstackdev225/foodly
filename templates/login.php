<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectez-vous à votre compte  - foodly</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../icon/foodly-logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4974ed612a.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Login section: split layout (form on the left, image on the right) -->
    <section class="container-fluid bg-light overflow-hidden">
    <div class="row min-vh-100">

        <!-- Left column: login content -->
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
            Se connecter<br>
            <span class="text-danger">à votre espace</span>
            </h1>

            <!-- Short introduction -->
            <p class="text-secondary mb-4 col-xl-10">
            Retrouvez toutes vos recettes, échangez avec la communauté et continuez
            à partager votre passion pour la cuisine !
            </p>

            <!-- Login form -->
            <form method="POST" class="col-xl-11" novalidate>

            <!-- Username field -->
            <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white mb-3">
                <span class="input-group-text bg-white border-0 ps-4">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" class="form-control border-0 shadow-none" id="username" name="username" placeholder="Nom d'utilisateur" aria-label="Nom d'utilisateur" required aria-required="true">
            </div>

            <!-- Password field with show/hide button -->
            <div class="input-group input-group-lg rounded-pill overflow-hidden border bg-white mb-3">
                <span class="input-group-text bg-white border-0 ps-4">
                <i class="fa-solid fa-lock fa-fw text-dark"></i>
                </span>
                <input type="password" class="form-control border-0 shadow-none" id="password" name="password" placeholder="Mot de passe" aria-label="Mot de passe" required>
                <button type="button" class="btn bg-white border-0 pe-4 text-secondary" aria-label="Afficher le mot de passe">
                <i class="fa-regular fa-eye"></i>
                </button>
            </div>

            <!-- Remember me checkbox + forgot password link -->
            <div class="d-flex justify-content-between align-items-center small mb-4">
                <div class="form-check m-0">
                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                <label class="form-check-label text-secondary" for="remember">Se souvenir de moi</label>
                </div>
                <a href="#" class="text-secondary">Mot de passe oublié ?</a>
            </div>

            <!-- Main submit button -->
            <button type="submit" class="btn btn-danger btn-lg w-100 rounded-pill d-flex align-items-center justify-content-center gap-2 mb-4">
                <i class="fa-solid fa-right-to-bracket"></i>
                Se connecter
            </button>

             <!-- Divider: "Not account?" -->
            <div class="d-flex align-items-center gap-3 text-secondary small mb-3 px-5">
                <hr class="flex-grow-1 m-0">
                <span>Pas encore de compte ?</span>
                <hr class="flex-grow-1 m-0">
            </div>

            <!-- Link to the signup page -->
           <div class="text-center">
                <a href="signup.php" class="btn btn-outline-secondary btn-lg rounded-pill bg-white text-dark px-5 d-inline-flex align-items-center gap-2">
                 <i class="fa-solid fa-user-plus"></i>
                S'inscrire
                </a>
            </div>

            </form>

        </div>
        </div>

        <!-- Right column: image (hidden on screens smaller than lg) -->
        <div class="col-lg-6 p-0 d-none d-lg-block">
        <img src="../../images/login_img.png" alt="Saumon grillé avec légumes et quinoa dans un plat" class="w-100 h-100 object-fit-cover">
        </div>

    </div>
    </section>
</body>
</html>