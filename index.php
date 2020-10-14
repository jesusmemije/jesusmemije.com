<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portafolio - Jesús González Memije</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Jesús González Memije</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Inicio</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Info</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Habilidades</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Proyectos</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contacto</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hola,<br>Soy <span class="home__title-color">Jesús</span><br> Desarrollador web</h1>

                    <a href="#contact" class="button">Contacto</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/jesusmemije" target="_BLANK" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" target="_BLANK" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="https://github.com/jesusmemije" target="_BLANK" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/perfil.png" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">Info</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Marlon</h2>
                        <p class="about__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate cum expedita quo culpa tempora, assumenda, quis fugiat ut voluptates soluta, aut earum nemo recusandae cumque perferendis! Recusandae alias accusamus atque.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Habilidades</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Habilidades profesionales</h2>
                        <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UX/UI</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Proyectos</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contacto</h2>

                <div class="contact__container bd-grid">
                    <form action="" class="contact__form">
                        <input type="text" placeholder="Nombre" class="contact__input">
                        <input type="mail" placeholder="Correo electrónico" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="button" value="Enviar" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Jesús</p>
            <div class="footer__social">
                <a href="https://facebook.com/jesusgonzalezmemije" target="_BLANK" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/jesusmemije_" target="_BLANK" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://twitter.com/JesusMemije_" target="_BLANK" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2020 Todos los derechos reservados</p>
            
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>