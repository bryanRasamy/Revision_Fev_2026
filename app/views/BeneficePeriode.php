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
            <h1 class="text-center fw-bold text-dark mb-5 display-4">Benefices</h1>

             <div class="mb-4">
                <div class="alert alert-info border-0 shadow-sm mb-3" role="alert">
                    <h5 class="alert-heading mb-0">
                        <i class="fas fa-filter me-2"></i>Filtrer par période
                    </h5>
                </div>
                <div class="btn-group shadow-sm" role="group">
                    <a href="<?= BASE_URL ?>/benefice/jour" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-calendar-day me-2"></i>Jour
                    </a>
                    <a href="<?= BASE_URL ?>/benefice/mois" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-calendar-alt me-2"></i>Mois
                    </a>
                    <a href="<?= BASE_URL ?>/benefice/annee" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-calendar me-2"></i>Année
                    </a>
                </div>
            </div>
            
            <table class="table table-hover table-striped table-bordered table-sm align-middle shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Date de livraison</th>
                        <th>Total de recette</th>
                        <th>Total de salaire</th>
                        <th>Bénéfices</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($resultatjour)){ 
                        foreach($resultatjour as $ben){ ?>    
                    <tr> 
                        <td><?php echo $ben['date_livraison']; ?></td>
                        <td><?php echo $ben['total_recette']; ?></td>
                        <td><?php echo $ben['total_salaire']; ?></td>
                        <td><?php echo $ben['benefice']; ?></td>
                    </tr>
                    <?php } 
                    } ?>
                     <?php if(!empty($resultatannee)){ 
                        foreach($resultatannee as $ben){ ?>    
                    <tr> 
                        <td><?php echo $ben['annee']; ?></td>
                        <td><?php echo $ben['total_recette']; ?></td>
                        <td><?php echo $ben['total_salaire']; ?></td>
                        <td><?php echo $ben['benefice']; ?></td>
                    </tr>
                    <?php } 
                    } ?>
                     <?php if(!empty($resultatmois)){ 
                        foreach($resultatmois as $ben){ ?>    
                    <tr> 
                        <td><?php echo $ben['mois']; ?> - <?php echo $ben['annee']; ?></td>
                        <td><?php echo $ben['total_recette']; ?></td>
                        <td><?php echo $ben['total_salaire']; ?></td>
                        <td><?php echo $ben['benefice']; ?></td>
                    </tr>
                    <?php } 
                    } ?>
                </tbody>
            </table>
             <a href="<?= BASE_URL ?>/" class="btn btn-danger  mt-4 col-12 col-lg-12 col-md-12 fs-5 mb-4"> Retour  </a>
        </section>
        
    </main>
    <script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>