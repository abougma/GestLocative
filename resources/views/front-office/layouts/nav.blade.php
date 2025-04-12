<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo-dark.png') }}" srcset="{{ asset('assets/img/logo-dark@2x.png') }} 2x" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start" id="navbarNav">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link" href="#" data-bs-toggle="dropdown">Syndic</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-bs-toggle="dropdown">Gestion locative</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-bs-toggle="dropdown">Vente</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-bs-toggle="dropdown">Achat</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link" href="#" data-bs-toggle="dropdown">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Vacances</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('locataire.dashboard') }}">Locataire</a>
                        </li>

                    </ul>

                    <!-- Ajout des boutons "Nous contacter" et "Connexion" dans le offcanvas -->
                    <div class="d-lg-none mt-4 px-3">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded w-100 mb-2 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-envelope-fill"></i> Nous contacter
                        </a>

                        <div class="accordion" id="accordionMobile">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingConnexion">
                                    <button class="accordion-button collapsed btn btn-sm btn-outline-primary w-100 rounded d-flex align-items-center justify-content-center gap-2"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseConnexion" aria-expanded="false" aria-controls="collapseConnexion">
                                        <i class="bi bi-box-arrow-in-right"></i> Connexion
                                    </button>
                                </h2>
                                <div id="collapseConnexion" class="accordion-collapse collapse" aria-labelledby="headingConnexion" data-bs-parent="#accordionMobile">
                                    <div class="accordion-body px-0">
                                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('login') }}">
                                            <i class="bi bi-person-lines-fill"></i> Espace Candidat Locataire
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('login') }}">
                                            <i class="bi bi-house-door-fill"></i> Espace Locataire
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('login') }}">
                                            <i class="bi bi-person-badge-fill"></i> Espace Propriétaire
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- /.offcanvas-footer -->
                    <div class="offcanvas-footer d-lg-none mt-auto">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-md-block">
                        <a href="#" class="btn btn-sm btn-primary rounded">
                            <i class="uil uil-envelope me-1"></i> Nous contacter
                        </a>
                    </li>

                    @if(auth()->check())
                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="nav-link" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="uil uil-user-circle" style="font-size: 40px;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="profileDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="uil uil-user me-2"></i> Mon Profil
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="uil uil-setting me-2"></i> Paramètres
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('pages.logoutCandidatLocataire') }}">
                                        <i class="uil uil-signout me-2"></i> Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="btn btn-sm btn-primary rounded dropdown-toggle" id="connexionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="uil uil-user me-1"></i> Connexion
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="connexionDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        <i class="uil uil-user-plus me-2"></i> Espace Candidat Locataire
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        <i class="uil uil-user-md me-2"></i> Espace Locataire
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">
                                        <i class="uil uil-home-alt me-2"></i> Espace Propriétaire
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                        </button>
                    </li>
                </ul>
            </div>


            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
