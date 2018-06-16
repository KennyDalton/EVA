<div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav">
    <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
        <!-- Logo -->
        <li style="height: 100%">
            <div class="logo-wrapper waves-light">
                <a href="#">
                    <img src="/img/eva.png" class="img-fluid flex-center">
                </a>
            </div>
        </li>
        <!--/. Logo -->
        <!--Social-->
        <li>
            <ul class="social">
                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus"> </i></a></li>
                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
            </ul>
        </li>
        <!--/Social-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header waves-effect arrow-r" href="/home">
                    <i class="fas fa-file-alt"></i>Inicio
                    </a>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r" href="/calendario">
                    <i class="fas fa-user"></i>Calendario
                    </a>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-university"></i>
                        Mis Diplomados
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            @if(Auth()->user()->tipo=='docente')
                            <li>
                                <a class="waves-effect" href="/crearCurso">
                                <i class="fas fa-user"></i> Nuevo Diplomado
                                </a>
                            </li>
                            @endif
                            @if(Auth()->user()->tipo!='docente')
                            <li>
                                <a class="waves-effect" href="/buscador">
                                <i class="fa fa-search"></i>
                                    Inscribirse a un Diplomado
                                </a>
                            </li>
                            @endif
                            @if(Auth()->user()->tipo!='docente')
                            <li>
                                <a class="waves-effect" href="/misCursos">
                                <i class="fa fa-search"></i> Diplomado Inscrito
                                </a>
                            </li>
                            @endif
                            @if(Auth()->user()->tipo=='docente')
                            <li>
                                <a class="waves-effect" href="/misCursos">
                                <i class="fa fa-search"></i> Diplomados
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                <hr class="wDiplomados
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-envelope-o"></i> 
                        Contact me
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="#" class="waves-effect">
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    Write a message
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong">
        
    </div>
</div>