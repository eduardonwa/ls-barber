<!-- footer -->
<footer class="footer full-width content-grid">
    <!-- contacto -->
    <section class="contacto" id="contacto">

        <?php foreach ($negocio as $n) : ?>
            <h2>Visítanos en <?= $n['direccion'] ?></h2>
        <?php endforeach ?>
            
            <p>Horario de Atención:</p>

        <?php foreach ($horario as $h) : ?>
            <ul>
                <li>
                    <?= $h['dia']?>
                    <?= $h['horario_abierto']?> -
                    <?= $h['horario_cerrado']?>
                </li>
            </ul>
        <?php endforeach ?>

        <ul class="footer-menu">
            <li>
                <a href="/">
                    Inicio
                </a>
            </li>
            <li>
                <a href="#reservaciones">
                    Reservaciones
                </a>
            </li>
            <li>
                <a href="#beneficios">
                    Acerca
                </a>
            </li>

            <li>
                <a href="#servicios">
                    Servicios
                </a>
            </li>
        </ul>

        <div id="mapa">
            <!-- Incluir un mapa interactivo aquí -->
        </div>
    </section>

    <!-- redes sociales -->
    <section class="redes-sociales">
        <p>Síguenos en nuestras redes sociales</p>
        <ul>
            <?php foreach ($enlaces as $e) :?>
                <li>
                    <a href="<?= $e['enlace']?>">
                        <img
                            width="34"
                            height="34"
                            src="/img/facebook-logo.svg"
                            alt="">
                    </a>
                </li>
            <?php endforeach ?>
<!--             
            <li>
                <a href="https://www.instagram.com">
                    <img
                        width="34"
                        height="34"
                        src="/img/instagram-logo.svg"
                        alt="">
                </a>
            </li>
            <li>
                <a href="https://www.twitter.com">
                    <img
                        width="34"
                        height="34"
                        src="/img/x-logo.svg"
                        alt="">
                </a>
            </li> -->
        </ul>
    </section>


</footer>