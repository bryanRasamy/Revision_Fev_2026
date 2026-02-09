<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - Gestion de livraison</title>
    <link href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <header class="bg-primary bg-gradient shadow-lg sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark py-3">
                <a href="<?= BASE_URL ?>/" class="navbar-brand fs-2 fw-bold">Societe de livraison</a>
            </nav>
        </div>
    </header>

    <main class="py-5">
        <section class="container">
            <h1 class="text-center fw-bold text-dark mb-5 display-4">Tout à savoir dans la societe</h1>
            
            <article class="row g-4">
                <section class="col-12 col-md-6 col-lg-3">
                    <article class="card h-100 shadow-sm border-0 text-center">
                        <a href="<?= BASE_URL ?>/societe/info/livreurs" class="text-decoration-none text-dark">
                            <section class="card-body p-4">
                                <i class="bi bi-people text-primary display-1 mb-3"></i>
                                <h2 class="card-title h4 fw-bold mb-3">Livreurs</h2>
                                <p class="card-text text-muted">Information des livreurs dans la societe</p>
                            </section>
                        </a>
                    </article>
                </section>

                <section class="col-12 col-md-6 col-lg-3">
                    <article class="card h-100 shadow-sm border-0 text-center">
                        <a href="<?= BASE_URL ?>/societe/info/vehicules" class="text-decoration-none text-dark">
                            <section class="card-body p-4">
                                <i class="bi bi-car-front text-success display-1 mb-3"></i>
                                <h2 class="card-title h4 fw-bold mb-3">Vehicules</h2>
                                <p class="card-text text-muted">Information des véhicules disponible</p>
                            </section>
                        </a>
                    </article>
                </section>

                <section class="col-12 col-md-6 col-lg-3">
                    <article class="card h-100 shadow-sm border-0 text-center">
                        <a href="<?= BASE_URL ?>/societe/info/colis" class="text-decoration-none text-dark">
                            <section class="card-body p-4">
                                <i class="bi bi-box2 text-warning display-1 mb-3"></i>
                                <h2 class="card-title h4 fw-bold mb-3">Colis</h2>
                                <p class="card-text text-muted">Information des colis</p>
                            </section>
                        </a>
                    </article>
                </section>

                <section class="col-12 col-md-6 col-lg-3">
                    <article class="card h-100 shadow-sm border-0 text-center">
                        <a href="<?= BASE_URL ?>/societe/info/livraisons" class="text-decoration-none text-dark">
                            <section class="card-body p-4">
                                <i class="bi bi-box-seam text-secondary display-1 mb-3"></i>
                                <h2 class="card-title h4 fw-bold mb-3">Livraisons</h2>
                                <p class="card-text text-muted">Information sur toutes les livraisons</p>
                            </section>
                        </a>
                    </article>
                </section>
            </article>
        </section>
    </main>
    <script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>