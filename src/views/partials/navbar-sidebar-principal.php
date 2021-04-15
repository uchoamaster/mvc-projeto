    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?=$base;?>/" class="brand-link">
                <img src="<?=$base;?>/dist/img/S_LOGO.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">IMPLES</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?=$base;?>/dist/img/uchoa2.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?=$base;?>/perfil" class="d-block">Carlos Uchôa</a>
                    </div>
                </div>



                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">

                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                                <li class="nav-item menu-open">

                                    <ul class="nav nav-treeview">


                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/favoritos" class="nav-link">
                                        <i class="nav-icon fas fa-star"></i>
                                        <p>
                                            Favoritos
                                            <span class="right badge badge-danger">Novo</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/cad-cidades" class="nav-link">
                                        <i class="nav-icon far fa-address-card"></i>
                                        <p>
                                            Cadastros
                                            <span class="right badge badge-danger">Novo</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/financeiro" class="nav-link">
                                        <i class="nav-icon far fa-money-bill-alt"></i>
                                        <p>
                                            Financeiro
                                            <span class="right badge badge-danger">Novo</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/gerencial" class="nav-link">
                                        <i class="nav-icon fas fa-chart-line"></i>
                                        <p>
                                            Gerencial
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/rh" class="nav-link">
                                        <i class="nav-icon fas fa-book"></i>
                                        <p>
                                            RH
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/entradas" class="nav-link">
                                        <i class="nav-icon fas fa-sort-amount-up"></i>
                                        <p>
                                            Entradas
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/saidas" class="nav-link">
                                        <i class="nav-icon fas fa-sort-amount-down-alt"></i>
                                        <p>
                                            Saídas
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/relatorios" class="nav-link">
                                        <i class="nav-icon fas fa-funnel-dollar"></i>
                                        <p>
                                            Relatórios
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/utilitarios" class="nav-link">
                                        <i class="nav-icon fas fa-tools"></i>
                                        <p>
                                            Utilitários
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/agenda-pessoal" class="nav-link">
                                        <i class="nav-icon fas fa-calendar"></i>
                                        <p>
                                            Agenda Pessoal
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=$base;?>/ajuda" class="nav-link">
                                        <i class="nav-icon fas fa-question-circle"></i>
                                        <p>
                                            Ajuda
                                        </p>
                                    </a>
                                </li>


                            </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>