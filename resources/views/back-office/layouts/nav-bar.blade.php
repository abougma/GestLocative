<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar-left">

    <div data-simplebar class="h-100">

        <!--- Sidebar-menu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="left-menu list-unstyled" id="side-menu">
                <li>
                    <a href="#" class="">
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Mes paramètres</li>

                <li>
                    <a href="{{ route('locataire.dashboard') }}"><i class=" fas fa-home"></i> <span>Accueil</span></a>
                </li>
                <li>
                    <a href="#"><i class=" fas fa-piggy-bank"></i> <span>Compte</span></a>
                </li>
                <li>
                    <a href="#"><i class=" fas fa-envelope-open-text"></i> <span>Message</span></a>
                </li>
                <li>
                    <a href="{{ route('locataire.signalement') }}"><i class="fas fa-exclamation-triangle"></i> <span>Signalements</span></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-folder"></i> <span>Documents</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-trophy"></i> <span>Assurance</span></a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
