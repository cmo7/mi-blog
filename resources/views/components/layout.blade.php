<!DOCTYPE HTML>
<!--
DISEÑO:
 Phantom by HTML5 UP
 html5up.net | @ajlkn
 Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

Desarrollo:
 Este componente es el layout principal. Se ocupa de la etiqueta head, del body
 con un whrapper y de un footer, así como el menú del botón hamburguesa.

 El slot está colocado entre el menú offscreen del botón hamburguesa y el footer.
-->
<html>

<head>
    <title>Phantom by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="/assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">



        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>

            <form action="/" method="get">
            <input type="text" name="search" id="search" placeholder="Buscar">
            <input class="button primary small fit" type="submit" value="buscar">
            </form>

            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/new/post">Nuevo Post</a></li>
                <li><a href="generic.html">Tempus etiam</a></li>
                <li><a href="generic.html">Consequat dolor</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
        </nav>

        <!-- Main -->

            {{ $slot }}

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Get in touch</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send" class="primary" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a>
                        </li>
                        <li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a>
                        </li>
                        <li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a>
                        </li>
                        <li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a>
                        </li>
                        <li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
                        <li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
                        <li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/browser.min.js"></script>
    <script src="/assets/js/breakpoints.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>
