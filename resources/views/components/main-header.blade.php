<!-- Este componente se encarga del encabezado de todas las páginas
    
    Incluye un logotipo, nombre de la web y un enlace vacio para abrir el menú -->
<header id="header">
    <div class="inner">

        <!-- Logo -->
        <a href="/" class="logo">
            <span class="symbol"><img src="/images/logo.svg" alt="" /></span><span class="title">{{config('app.name')}}</span>
        </a>

        <!-- Nav -->
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
            </ul>
        </nav>

    </div>
</header>