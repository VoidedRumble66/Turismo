<?php include ('php/head.php');
?>

<body>
    
<?php include ('php/menu.php');
?>

    <div>
        <section class="fondo">
            <div class="contenido-hero">
            </div>
        </section>
    </div>


    <div class="contenedor-items">
        <div class="item">
            <a href="depa1.php">
            <img src="img/3.png" alt="Barrio Bonampak">
            </a>
            <div class="info-producto">
                <h2>Barrio Bonampak</h2>
                <p>Hermoso departamento con 2 habitaciones, sala de estar y cocina equipada.</p>
                <p class="precio">$1500 MXN / mes</p>
                <button>Añadir a favoritos</button>
                <button onclick="window.location.href='depa1.html'">Ver más</button>
            </div>
        </div>

        <div class="item">
            <a href="depa2.php">
            <img src="img/2.png" alt="Centro">
            </a>
            <div class="info-producto">
                <h2>Barrio Candelaria</h2>
                <p>Acogedor apartamento de 3 habitaciónes cerca del parque central.</p>
                <p class="precio">$3000 MXN / mes</p>
                <button>Añadir a favoritos</button>
                <button onclick="window.location.href='depa2.html'">Ver más</button>
            </div>
        </div>

        <div class="item">
            <a href="depa3.php">
            <img src="img/1.png" alt="Krunchy">
            </a>
            <div class="info-producto">
                <h2>Vista al centro</h2>
                <p>Amplio departamento con terraza y vistas espectaculares a Krunchy pollo.</p>
                <p class="precio">$2000 MXN / mes</p>
                <button>Añadir a favoritos</button>
                <button onclick="window.location.href='depa3.html'">Ver más</button>
            </div>
        </div>

        <div class="item">
            <a href="depa4.php">
            <img src="img/dep21.webp" alt="Barrio Guadalupe">
            </a>
            <div class="info-producto">
                <h2>Barrio Guadalupe</h2>
                <p>Departamento moderno con acceso a piscina y áreas comunes.</p>
                <p class="precio">$25000 MXN / mes</p>
                <button>Añadir a favoritos</button>
                <button onclick="window.location.href='depa4.html'">Ver más</button>
            </div>
        </div>
    </div>
</body>

<?php include ('php/footer.php');
?>