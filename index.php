<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gouzkenshap - Vente de lapins, chemises & deals</title>
    <meta name="description" content="Gouzkenshap : vente de lapins, granulés, chemises de qualité et deals. Satisfaire notre clientèle est notre priorité.">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#accueil">
                <i class="bi bi-shop"></i> Gouzkenshap
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Menu de navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gouzrabbits.php">Gouzrabbits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chemises.php">Chemises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deals.php">Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- ===== SECTION ACCUEIL ===== -->
        <section id="accueil" class="hero-section d-flex align-items-center">
            <div class="container text-center text-white">
                <div class="row justify-content-center">
                    <div class="col-lg-8 fade-in">
                        <h1 class="display-4 fw-bold mb-3">Bienvenue chez Gouzkenshap</h1>
                        <p class="lead mb-4">Vente de lapins, chemises de qualité et deals exceptionnels.</p>
                        <p class="fs-5 mb-4">Satisfaire notre clientèle est notre priorité.</p>
                        <a href="#services" class="btn btn-primary btn-lg me-2">Nos services</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SECTION SERVICES ===== -->
        <section id="services" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold text-primary slide-up">Nos services</h2>
                    <p class="lead text-muted">Découvrez tout ce que nous vous proposons</p>
                </div>
                <div class="row g-4">
                    <!-- Carte 1 : Lapins -->
                    <div class="col-md-4 fade-in">
                        <div class="card h-100 border-0 shadow-sm service-card">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-flower1 display-1 text-primary mb-3"></i>
                                <h3 class="card-title h4">Vente de lapins</h3>
                                <p class="card-text">Lapins vivants ou morts, granulés et accessoires pour votre élevage.</p>
                                <a href="#lapins" class="btn btn-outline-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Carte 2 : Chemises -->
                    <div class="col-md-4 fade-in" style="animation-delay: 0.2s;">
                        <div class="card h-100 border-0 shadow-sm service-card">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-handbag display-1 text-primary mb-3"></i>
                                <h3 class="card-title h4">Chemises & Fripperies</h3>
                                <p class="card-text">Chemises de qualité by Yoyo Créa et fripperies sélectionnées pour vous.</p>
                                <a href="#contact" class="btn btn-outline-primary">Commander</a>
                            </div>
                        </div>
                    </div>
                    <!-- Carte 3 : Deals -->
                    <div class="col-md-4 fade-in" style="animation-delay: 0.4s;">
                        <div class="card h-100 border-0 shadow-sm service-card">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-gem display-1 text-primary mb-3"></i>
                                <h3 class="card-title h4">Deals exceptionnels</h3>
                                <p class="card-text">Profitez de nos offres spéciales et deals du moment.</p>
                                <a href="#contact" class="btn btn-outline-primary">Voir les offres</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SECTION LAPINS / GOUZRABBITS ===== -->
        <section id="lapins" class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 slide-up">
                        <h2 class="display-5 fw-bold text-primary">Gouzrabbits</h2>
                        <p class="lead">Découvrez nos lapins disponibles à la vente.</p>
                        <p>Nous proposons des lapins en bonne santé, élevés avec soin. Disponibles vivants ou morts selon vos besoins.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Lapins de race sélectionnée</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Granulés et alimentation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Accessoires d'élevage</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Conseil et accompagnement</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-lg">Commander</a>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0 fade-in">
                        <img src="istockphoto-496689800-612x612.jpg" 
                             alt="Nos lapins disponibles à la vente" 
                             class="img-fluid rounded-3 shadow-lg img-hover">
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SECTION CHEMISES / YOYO CRÉA ===== -->
        <section id="chemises" class="py-5">
            <div class="container">
                <div class="row align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 slide-up">
                        <h2 class="display-5 fw-bold text-primary">Chemises & Fripperies</h2>
                        <p class="lead">Des chemises de qualité by Yoyo Créa.</p>
                        <p>Découvrez notre sélection de chemises élégantes et fripperies tendance. Des pièces uniques soigneusement sélectionnées pour votre style.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Chemises by Yoyo Créa</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Fripperies de qualité</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Pièces uniques et tendance</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Livraison disponible</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-lg">Commander maintenant</a>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0 fade-in">
                        <div class="bg-light rounded-3 p-5 text-center shadow-lg">
                            <i class="bi bi-handbag display-1 text-primary"></i>
                            <h3 class="mt-3">Yoyo Créa</h3>
                            <p class="text-muted">Élégance et qualité</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SECTION DEALS ===== -->
        <section id="deals" class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 slide-up">
                        <h2 class="display-5 fw-bold text-primary">Deals exceptionnels</h2>
                        <p class="lead">Profitez de nos offres spéciales.</p>
                        <p>Des deals imbattables sur nos produits. Ne manquez pas nos promotions du moment et bénéficiez des meilleurs prix.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Promotions exclusives</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Offres groupées</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Réductions fidélité</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Ventes flash régulières</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-lg">Voir les offres</a>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0 fade-in">
                        <div class="bg-white rounded-3 p-5 text-center shadow-lg">
                            <i class="bi bi-gem display-1 text-primary"></i>
                            <h3 class="mt-3">Promotions</h3>
                            <p class="text-muted">Jusqu'à -50% sur certains articles</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SECTION CONTACT ===== -->
        <section id="contact" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold text-primary slide-up">Contactez-nous</h2>
                    <p class="lead text-muted">Nous sommes à votre écoute</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 fade-in">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-4">
                                    <i class="bi bi-whatsapp display-6 text-success me-3"></i>
                                    <div>
                                        <h5 class="mb-0">WhatsApp</h5>
                                        <a href="https://wa.me/2250153828209" class="text-decoration-none fs-5" target="_blank">
                                            0153828209
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center mb-4">
                                    <i class="bi bi-envelope display-6 text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Email</h5>
                                        <span class="fs-5">contact@gouzkenshap.com</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-geo-alt display-6 text-danger me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Localisation</h5>
                                        <span class="fs-5">Abidjan, Côte d'Ivoire</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">&copy; 2026 Gouzkenshap. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#accueil" class="text-white text-decoration-none me-3">
                        <i class="bi bi-house-fill"></i> Accueil
                    </a>
                    <a href="#lapins" class="text-white text-decoration-none me-3">
                        <i class="bi bi-flower1"></i> Gouzrabbits
                    </a>
                    <a href="#chemises" class="text-white text-decoration-none me-3">
                        <i class="bi bi-handbag"></i> Chemises
                    </a>
                    <a href="#deals" class="text-white text-decoration-none me-3">
                        <i class="bi bi-gem"></i> Deals
                    </a>
                    <a href="#contact" class="text-white text-decoration-none">
                        <i class="bi bi-envelope-fill"></i> Contact
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>

