 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset ('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Clinica CTM</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset ('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->get_user_name() }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p> Inicio</p>   
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('ficha.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-user-plus"></i>
                    <p>Nueva Ficha Paciente</p>   
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('atencion.create') }}" class="nav-link">
                    <i class="fas fa-book-medical"></i>
                    <p>Nueva Atención Paciente</p>   
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('genero.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-plus"></i>
                    <p>Agregar Genero</p>   
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Cerrar Sesión</p>   
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


                                  