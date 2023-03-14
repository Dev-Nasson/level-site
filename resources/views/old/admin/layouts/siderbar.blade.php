<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('admin') }}/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span> Inicio</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bootstrap UI </h6>
                <a class="collapse-item" href="{{url('auth/inicio') }}"> Visualizar </a>
                <a class="collapse-item" href="{{url('auth/inicio/create') }}"> Cadastrar </a>

            </div>
        </div>
    </li>




    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#servico"
            aria-expanded="true" aria-controls="servico">
            <i class="fas fa-fw fa-table"></i>
            <span>Servicos</span>
        </a>
        <div id="servico" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">servico</h6>
                <a class="collapse-item" href="{{ url('auth/servico') }}">Visualizar</a>
                <a class="collapse-item" href="{{ url('auth/servico/create') }}">Cadastrar</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#produto"
            aria-expanded="true" aria-controls="produto">
            <i class="fas fa-fw fa-table"></i>
            <span>Produtos</span>
        </a>
        <div id="produto" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">servico</h6>
                <a class="collapse-item" href="{{ url('auth/produto') }}">Visualizar</a>
                <a class="collapse-item" href="{{ url('auth/produto/create') }}">Cadastrar</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#modulo"
            aria-expanded="true" aria-controls="modulo">
            <i class="fas fa-fw fa-table"></i>
            <span>Módulos</span>
        </a>
        <div id="modulo" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">módulo</h6>
                <a class="collapse-item" href="{{ url('auth/servico') }}">Visualizar</a>
                <a class="collapse-item" href="{{ url('auth/servico/create') }}">Cadastrar</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#imagem"
            aria-expanded="true" aria-controls="imagem">
            <i class="fas fa-fw fa-table"></i>
            <span>Imagens</span>
        </a>
        <div id="imagem" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">módulo</h6>
                <a class="collapse-item" href="{{ url('auth/servico') }}">Visualizar</a>
                <a class="collapse-item" href="{{ url('auth/servico/create') }}">Cadastrar</a>
            </div>
        </div>
    </li>




    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#projectos"
            aria-expanded="true" aria-controls="projectos">
            <i class="fas fa-fw fa-table"></i>
            <span>Projectos</span>
        </a>
        <div id="projectos" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Projectos</h6>
                <a class="collapse-item" href="{{ url('auth/projecto') }} "> Visualizar </a>
                <a class="collapse-item" href="{{ url('auth/projecto/create') }} ">Cadastrar</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contactos"
            aria-expanded="true" aria-controls="contactos">
            <i class="fas fa-fw fa-table"></i>
            <span>Contactos</span>
        </a>
        <div id="contactos" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">contactos</h6>
                <a class="collapse-item" href="{{ url('auth/contacto') }} ">Visualizar</a>
                <a class="collapse-item" href="{{ url('auth/contacto/create') }} ">Cadastrar</a>
            </div>
        </div>
    </li>






    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
