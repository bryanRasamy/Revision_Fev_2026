<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion de livraison</title>
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
            <h1 class="text-center fw-bold text-dark mb-5 display-4">Zones de livraison</h1>
            
            <table class="table table-hover table-striped table-bordered table-sm align-middle shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Zones</th>
                        <th>Pourcentage</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($allzones)){ 
                        foreach($allzones as $zone){ ?>    
                        <tr> 
                            <td><?php echo $zone['nom_zone']; ?></td>
                            <td><?php echo $zone['pourcentage']; ?> %</td>
                           <td>
                                <a href="<?= BASE_URL ?>/" class="btn btn-primary btn-sm me-2">Modifier</a>
                            </td>
                            <td>
                                <a href="<?= BASE_URL ?>/zone/supprimer/<?php echo $zone['id_zone'];?>" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
            <a href="<?= BASE_URL ?>/" class="btn btn-success mt-4 col-12 col-lg-12 col-md-12 fs-5 mb-4">Ajouter une Zone</a>
             <a href="<?= BASE_URL ?>/" class="btn btn-danger  mt-4 col-12 col-lg-12 col-md-12 fs-5 mb-4"> Retour  </a>
        </section>
        
    </main>
    <script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>