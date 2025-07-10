<?php include ('php/head.php');
?>

<body>
    <?php include('php/menu.php');
    ?>

    <div class="slider-container">
        <div class="slider" id="slider">
            <div class="slide">
                <img src="img/5.png" alt="Departamento en Barrio Bonampak">
                <div class="slide-content">
                    <h2 class="slide-title">Departamentos de Lujo en Barrio Bonampak</h2>
                    <p class="slide-description">Espacios modernos con la mejor ubicación y comodidades para tu estancia</p>
                </div>
            </div>
            <div class="slide">
                <img href="index.html" src="img/8.png" alt="Departamento en Centro">
                <div class="slide-content">
                    <h2 class="slide-title">Apartamentos en el Centro</h2>
                    <p class="slide-description">Acceso rápido a todos los servicios y atracciones turísticas de la ciudad</p>
                </div>
            </div>
            <div class="slide">
                <img src="img/7.png" alt="Apartamento con vista">
                <div class="slide-content">
                    <h2 class="slide-title">Vistas Panorámicas</h2>
                    <p class="slide-description">Disfruta de los mejores atardeceres desde tu nuevo hogar</p>
                </div>
            </div>
            <div class="slide">
                <img src="img/3.png" alt="Apartamento familiar">
                <div class="slide-content">
                    <h2 class="slide-title">Espacio Familiar</h2>
                    <p class="slide-description">Departamentos amplios para toda la familia con áreas recreativas</p>
                </div>
            </div>
        </div>

    </div>

    <h2 class="destacados-titulo">Departamentos Destacados</h2>
    <div class="contenedor-items">
        <div class="item">
            <a href="depa1.html">
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
            <a href="depa2.html">
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
            <a href="depa3.html">
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
            <a href="depa4.html">
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

        <div class="item">
            <a href="depa5.html">
            <img src="img/dep54.webp" alt="San Sebastian">
            </a>
            <div class="info-producto">
                <h2>Barrio San Sebastian</h2>
                <p>Departamento moderno con vistas maravillosas.</p>
                <p class="precio">$100 MXN / mes</p>
                <button>Añadir a favoritos</button>
                <button onclick="window.location.href='depa5.html'">Ver más</button>
            </div>
        </div>

        
    </div>

    <?php include ('php/footer.php');
    ?>
    
</body>
</html>