<?php require base_path('views/partials/head.php') ?>
<body>
    <?php require base_path('views/partials/nav.php') ?>
    <!-- main wrap -->
    <main class="content-grid">
        <!-- hero -->
        <header class="hero full-width">
            <div class="hero-copy">
                <h1>Tu Look, Nuestra Pasión.</h1>
                <h2>Transforma tu Estilo con los Mejores Cortes en Barba(dos)</h2>
                <button>Agenda una cita</button>
            </div>
            <img
                class="hero-img"
                src="/img/hero-img.webp"
                alt="Imagen principal de la barbería">
        </header>

        <!-- reservaciones -->
        <section class="full-width reservaciones" id="reservaciones">
            <div class="reservas-copy-form">
                <h2>¿Placer o Negocios?</h2>
                <p>Obtén una cita para tu próximo corte o empieza a generar ese ingreso extra que necesitas.</p>
                <form action="reservar.html" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                    <label for="fecha">Fecha de la Cita:</label>
                    <input type="date" id="fecha" name="fecha" required>
                    <button type="submit">Reservar</button>
                </form>
            </div>

            <div class="reservas-support-copy">
                <h2>Los mismos, pero mejores.</h2>
                <p>
                    Desde que abrimos en el 2018, la pasión nunca se ha marchado. 
                    La preferencia de nuestros clientes siempre ha estado allí.  
                    
                    Pero tras experimentar inconformidades con proveedores sabíamos que algo tenía que cambiar.
                </p>

                <p>
                    Fue una decisión incómoda optar por vender nuestros propios productos.
                    <strong>!No sabíamos como vender!</strong>  <br>
                    Sin embargo, queríamos resolver el problema que teníamos.
                    Un tiempo después entendimos que habíamos tomado la mejor decisión.
                </p>

                <p>
                    Todo cambio cuando otros barberos empezaron a interesarse en nuestros productos
                    y a recomendarnos con sus clientes, <strong>¡eso lo cambió todo!</strong>
                    Nos dimos cuenta que si nos apoyamos como comunidad, todos ganan.
                    <br><br>
                    <a class="support-copy-link" href="#">
                        Nuestros productos
                        <img
                            width="25"
                            height="25"
                            src="/img/flecha.svg"
                            alt="">
                    </a>
                </p>
            </div>
        </section>

        <!-- testimonios -->
        <section class="testimonios" id="testimonios">
            <div class="testimonio-wrap">
                <div class="testimonio-elemento">
                    <div class="testimonio-img-wrapper">
                        <img
                            src="/img/barber-testimonio.webp"
                            alt="Cliente feliz en Barbados"
                        >
                    </div>
                    <p>“El mejor corte de mi vida. ¡Volveré seguro!” - Juan P.</p>
                </div>

                <div class="testimonio-elemento">
                    <div class="testimonio-img-wrapper">
                        <img
                            src="/img/barber-testimonio2.webp"
                            alt="Cliente feliz en Barbados"
                        >
                    </div>
                    <p>“Ambiente genial y servicio de primera.” - Enrique R.</p>
                </div>

                <?php require 'partials/testimonio.php' ;?>
            </div>
        </section>
       
        <!-- beneficios -->
        <section class="beneficios full-width" id="beneficios">
            <h2>Siempre listos para atenderte</h2>           
            <div class="beneficios-wrap">
                <div class="beneficios-elemento">
                    <div class="beneficio-img-wrapper">
                        <img
                            src="/img/beneficios-img.webp"
                            alt=""
                        >
                    </div>
                    
                        <h3>Barberos Expertos y Certificados</h3>
                        <p>Beneficio info</p>
                </div>
                
                <div class="beneficios-elemento">
                    <div class="beneficio-img-wrapper">
                        <img
                            src="/img/beneficios-img2.webp"
                            alt=""
                        >
                    </div>
                    <div class="beneficio-info">
                        <h3>Ambiente Acogedor y Profesional</h3>
                        <p>Beneficio info</p>
                    </div>
                </div>
    
                <?php require 'partials/beneficios.php'; ?>
            </div>
        </section>
    
        <!-- servicios -->
        <section class="servicios" id="servicios">
            <div class="servicios-wrap">
                <div class="servicio-elemento">
                    <div class="border-img">
                        <img
                            width="75"
                            height="75"
                            src="/img/cortes-clasicos-modernos.svg"
                            alt="">
                    </div>
                    <p>Cortes de Cabello Clásicos y Modernos</p>
                </div>

                <div class="servicio-elemento">
                    <div class="border-img">
                        <img
                            width="75"
                            height="75"
                            src="/img/tratamiento-capilares.svg"
                            alt="">
                    </div>
                    <p>Tratamientos Capilares</p>
                </div>

                <?php require 'partials/servicio.php' ;?>
            </div>
        </section>
    
        <?php require base_path('views/partials/footer.php') ?>
    </main>

    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("sideNav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("sideNav").style.width = "0";
        } 
    </script>
</body>
</html>