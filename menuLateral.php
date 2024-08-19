        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="./img/icon-asession.svg" alt="teste"/>
                </div>
                <div class="sidebar-brand-text mx-3">A-Session</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i>
                    <span>Início</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Usuarios Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseUsuario"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Usuários</span>
                </a>
                <div id="collapseUsuario" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="usuarioAddEdit.php">Adicionar</a>
                        <a class="collapse-item" href="usuarioList.php">Listar</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Usuarios Collapse Menu -->

            <!-- Nav Item - Filmes Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseFilme"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Filmes</span>
                </a>
                <div id="collapseFilme" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="filmeAddEdit.php">Adicionar</a>
                        <a class="collapse-item" href="filmeList.php">Listar</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Filmes Collapse Menu -->

        </ul>
        <!-- End of Sidebar -->
