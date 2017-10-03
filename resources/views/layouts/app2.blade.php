<!DOCTYPE HTML>
<!--
    Prologue by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>JUAN Web</title>
        <link rel="icon" type="images/jpg" href="{{asset('tema1/images/icono.jpg')}}"" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{asset('tema1/assets/css/main.css')}}" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body>

        <!-- Header -->
            <div id="header">

                <div class="top">

                    <!-- Logo -->
                        <div id="logo">
                            <span class="image avatar48"><img src="{{asset('tema1/images/avatar.jpg')}}" alt="" /></span>
                            <h1 id="title">{{ Auth::user()->name }}</h1>
                            <p>{{ Auth::user()->email }}</p>
                        </div>

                    <!-- Nav -->
                        <nav id="nav">
                            <!--

                                Prologue's nav expects links in one of two formats:

                                1. Hash link (scrolls to a different section within the page)

                                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                                2. Standard link (sends the user to another page/site)

                                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

                            -->
                            <ul>
                                <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Introduccion</span></a></li>
                                <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portafolio</span></a></li>
                                <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Acerca de mi </span></a></li>
                                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contacto</span></a></li>
                                <li>@if (Auth::guest())
                                    @else
                            <li class="dropdown">
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif</li>
                            </ul>
                        </nav>

                </div>

                <div class="bottom">

                    <!-- Social Icons -->
                        <ul class="icons">
                            <li><a href="https://twitter.com/NikolasIzR" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="https://www.facebook.com/juannikolas.buitragoruiz" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="https://gitlab.com/JuanRuiz10" class="fa fa-gitlab"><span class="label"></span></a></li>
                           
                        </ul>

                </div>

            </div>

        <!-- Main -->
            <div id="main">

                <!-- Intro -->
                    <section id="top" class="one dark cover">
                        <div class="container">

                            <header>
                                <h2 class="alt">Hola Amigos¡ <strong>Bienvenidos</strong>, a mi Blog WEB
                                un sitio diseñado para interactuar mas con ustedes y mostrarles un poco de mi trabajo</a>.</h2>
                                <p><br />
                                
                            </header>

                            <footer>
                                <a href="#portfolio" class="button scrolly">Empecemos</a>
                            </footer>

                        </div>
                    </section>

                <!-- Portfolio -->
                    <section id="portfolio" class="two">
                        <div class="container">

                            <header>
                                <h2>Portafolio</h2>
                            </header>

                            <p>Estos son algunos de mis proyectos relizados.</p>

                            <div class="row">
                                <div class="4u 12u$(mobile)">
                                    <article class="item">
                                        <a href="#" class="image fit"><img src="{{asset('tema1/images/pic02.jpg')}}" alt="" /></a>
                                        <header>
                                            <h3>Ipsum Feugiat</h3>
                                        </header>
                                    </article>
                                    <article class="item">
                                        <a href="#" class="image fit"><img src="{{asset('tema1/images/pic03.jpg')}}" alt="" /></a>
                                        <header>
                                            <h3>Rhoncus Semper</h3>
                                        </header>
                                    </article>
                                </div>
                                <div class="4u 12u$(mobile)">
                                    <article class="item">
                                        <a href="#" class="image fit"><img src="{{asset('tema1/images/pic04.jpg')}}" alt="" /></a>
                                        <header>
                                            <h3>Magna Nullam</h3>
                                        </header>
                                    </article>
                                    <article class="item">
                                        <a href="#" class="image fit"><img src="{{asset('tema1/images/pic05.jpg')}}" alt="" /></a>
                                        <header>
                                            <h3>Natoque Vitae</h3>
                                        </header>
                                    </article>
                                </div>
                                <div class="4u$ 12u$(mobile)">
                                    <article class="item">
                                        <a href="#" class="image fit"><img src="{{asset('tema1/images/pic06.jpg')}}" alt="" /></a>
                                        <header>
                                            <h3>Dolor Penatibus</h3>
                                        </header>
                                    </article>
                                    <article class="item">
                                        <a href="#" class="image fit"><img src="{{asset('tema1/images/pic07.jpg')}}" alt="" /></a>
                                        <header>
                                            <h3>Orci Convallis</h3>
                                        </header>
                                    </article>
                                </div>
                            </div>

                        </div>
                    </section>

                <!-- About Me -->
                    <section id="about" class="three">
                        <div class="container">

                            <header>
                                <h2>About Me</h2>
                            </header>

                            <a href="#" class="image featured"><img src="{{asset('tema1/images/pic08.jpg')}}" alt="" /></a>

                            <p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
                            ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
                            laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
                            parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
                            dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
                            ornare iaculis.</p>

                        </div>
                    </section>

                <!-- Contact -->
                    <section id="contact" class="four">
                        <div class="container">

                            <header>
                                <h2>Contact</h2>
                            </header>

                            <p>Enviame tus preguntas ,sugerencias o criticas </p>

                            <form method="post" action="#">
                                <div class="row">
                                    <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
                                    <div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
                                    <div class="12u$">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="12u$">
                                        <input type="submit" value="Send Message" />
                                    </div>
                                </div>
                            </form>

                        </div>
                    </section>

            </div>

        <!-- Footer -->
            <div id="footer">

                <!-- Copyright -->
                    <ul class="copyright">
                        <li>&copy; Untitled. All rights reserved.</li><li>Design: Juan Ruiz</a></li>
                    </ul>

            </div>

        <!-- Scripts -->
            <script src="{{asset('tema1/assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('tema1/assets/js/jquery.scrolly.min.js')}}"></script>
            <script src="{{asset('tema1/assets/js/jquery.scrollzer.min.js')}}"></script>
            <script src="{{asset('tema1/assets/js/skel.min.js')}}"></script>
            <script src="{{asset('tema1/assets/js/util.js')}}"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="{{asset('tema1/assets/js/main.js')}}"></script>

    </body>
</html>