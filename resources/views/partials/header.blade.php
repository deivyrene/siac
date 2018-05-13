<div class="sidebar" data-color="azure" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

            Tip 2: you can also add an image using data-image tag  
    -->
    
    <div class="logo">
        <a href="http://www.sipcom.cl" target="_blank" class="simple-text logo-normal">
            SIPCOM SIAC
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href="/">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <div  class="dropdown-menu dropdown-menu-right">
                <a class="nav-link" href="/">
                    <i class="material-icons">content_paste</i>
                    <p>Tablas Principales</p>
                </a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">content_paste</i>
                        <p>Tablas Principales</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('consultants.index') }}">Consultor</a>
                        <a class="dropdown-item" href="{{ route('activities.index') }}">Actitivades</a>
                        <a class="dropdown-item" href="{{ route('businessusers.index') }}">Usuarios Empresas</a>
                        <a class="dropdown-item" href="{{ route('companies.index') }}">Empresas</a>
                        <a class="dropdown-item" href="#">Usuarios Sistema</a>
                    </div>
                </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('registeractivities.index') }}">
                    <i class="material-icons">unarchive</i>
                    <p>Registrar Actividad</p>
                </a>
            </li>
        </ul>
    </div>
</div>