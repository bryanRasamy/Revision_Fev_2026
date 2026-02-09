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
            <h1 class="text-center fw-bold text-dark mb-5 display-4">Liste des colis dans la societe</h1>

             <div class="mb-4">
                <div class="alert alert-info border-0 shadow-sm mb-3" role="alert">
                    <h5 class="alert-heading mb-0">
                        <i class="fas fa-filter me-2"></i>Colis
                    </h5>
                </div>
            </div>
            
            <table class="table table-striped table-bordered table-sm align-middle shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Colis</th>
                        <th>Poids du colis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($colis)){ 
                        foreach($colis as $cl){ 
                    ?>    
                        <tr> 
                            <td><?php echo $cl['nom_colis']; ?></td>
                            <td><?php echo $cl['poids_kg']; ?> kg</td>
                        </tr>
                    <?php 
                            } 
                        } 
                    ?>
                </tbody>
            </table>          
             <a href="<?= BASE_URL ?>/societe/info" class="btn btn-danger  mt-4 col-12 col-lg-12 col-md-12 fs-5 mb-4"> Retour  </a>
        </section>
        
    </main>
    <script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>