<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar-left">

    <div data-simplebar class="h-100">

        <!--- Sidebar-menu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="left-menu list-unstyled" id="side-menu">

                @if(Auth::check() && Auth::user()->role === 'locataire')
                    {{-- MENU LOCATAIRE --}}
                    <li>
                        <a href="{{ route('locataire.dashboard') }}">
                            <i class="fas fa-desktop"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-title">Mes paramètres</li>

                    <li><a href="{{ route('locataire.accueil') }}"><i class="fas fa-home"></i> <span>Accueil</span></a></li>
                    <li><a href="{{ route('locataire.compte') }}"><i class="fas fa-piggy-bank"></i> <span>Compte</span></a></li>
                    <li><a href="{{ route('locataire.signalement') }}"><i class="fas fa-exclamation-triangle"></i> <span>Signalements</span></a></li>
                    <li><a href="{{ route('locataire.documents') }}"><i class="fas fa-folder"></i> <span>Documents</span></a></li>
                    <li><a href="{{ route('locataire.assurance') }}"><i class="fa fa-trophy"></i> <span>Assurance</span></a></li>
                @endif

                @if(Auth::check() && Auth::user()->role === 'gestionnaire')
                    {{-- MENU GESTIONNAIRE --}}
                    <li>
                        <a href="{{ route('gestionnaire.dashboard') }}">
                            <i class="fas fa-desktop"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-title">Gestion</li>

                    <li><a href="{{ route('gestionnaire.biens') }}"><i class="fas fa-building"></i> <span>Mes biens</span></a></li>
                    <li><a href="#"><i class="fas fa-users"></i> <span>Candidatures</span></a></li>
                    <li><a href="#"><i class="fas fa-exclamation-triangle"></i> <span>Signalements</span></a></li>
                    <li><a href="#"><i class="fas fa-folder-open"></i> <span>Documents</span></a></li>
                @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
