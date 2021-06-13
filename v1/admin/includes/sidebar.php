        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= URL_ADMIN ?>index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-dropbox"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Locabox</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= URL_ADMIN ?>index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gestion du parc de location
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#client"
                    aria-expanded="true" aria-controls="client">
                    <i class="fas fa-people-arrows"></i>
                    <span>Clients</span>
                </a>
                <div id="client" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action client:</h6>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>clients/add.php">Ajouter un client</a>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>clients/">Liste des clients</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#boxs"
                    aria-expanded="true" aria-controls="boxs">
                    <i class="fas fa-cubes"></i>
                    <span>Boxs</span>
                </a>
                <div id="boxs" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action boxs:</h6>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>boxs/add.php">Ajouter un box</a>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>boxs/">Liste des boxs</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#location"
                    aria-expanded="true" aria-controls="location">
                    <i class="fas fa-file-signature"></i>
                    <span>Locations</span>
                </a>
                <div id="location" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action location:</h6>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>locations/add.php">Ajouter une location</a>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>locations/ ">Liste des location</a>
                    </div>
                </div>
            </li>
            

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#location"
                    aria-expanded="true" aria-controls="location">
                    <i class="fas fa-file-signature"></i>
                    <span>Statistques</span>
                </a>
                <div id="location" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action location:</h6>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>locations/add.php">Ajouter une location</a>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>locations/ ">Liste des location</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gestion site web
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#actus"
                    aria-expanded="true" aria-controls="actus">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Actualités</span>
                </a>
                <div id="actus" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action actu:</h6>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>actus/add.php">Ajouter une actualité</a>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>actus/">Liste des actualité</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#utilisateur"
                    aria-expanded="true" aria-controls="utilisateur">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Utilisateurs</span>
                </a>
                <div id="utilisateur" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action utilisateur:</h6>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>utilisateur/add.php">Ajouter un utilisateur</a>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>utilisateur/">Liste des utilisateurs</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#objet"
                    aria-expanded="true" aria-controls="objet">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Objets</span>
                </a>
                <div id="objet" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action objet:</h6>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>objet/add.php">Ajouter un objet</a>
                        <a class="collapse-item" href="<?= URL_ADMIN ?>objet/">Liste des objets</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->