<?php include ('php/head.php');
?>

<body>
<?php include ('php/menu.php');
?>


    <div class="detalles-container">
        <div class="galeria">
            <img src="img/dep11.webp" alt="Departamento Centro" class="imagen-principal">
            <div class="miniaturas">
              <img src="img/dep12.webp" alt="Sala" class="miniatura">
              <img src="img/dep13.webp" alt="Cocina" class="miniatura">
              <img src="img/dep14.webp" alt="Baño" class="miniatura">
              <img src="img/dep11.webp" alt="Habitación" class="miniatura">
            </div>
        </div>

        <div class="detalles-info">
            <h1 class="detalles-titulo">Departamento en Barrio Candelaria</h1>
            <p class="precio-detalle">$3000 MXN / mes</p>
            
            <div class="detalles-descripcion">
                <p>Hermoso departamento ubicado en el corazón de la ciudad, una de las zonas más exclusivas y seguras de Ocosingo. Este acogedor espacio cuenta con todas las comodidades para hacer de tu estancia una experiencia inolvidable.</p>
                
                <p>Ideal para familias pequeñas o parejas que buscan un lugar tranquilo y bien ubicado. El departamento está completamente amueblado y equipado para que solo tengas que preocuparte por disfrutar.</p>
            </div>

            <div class="caracteristicas">
                <h3>Características principales</h3>
                <div class="lista-caracteristicas">
                    <div class="caracteristica-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 22v-8a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v8"></path>
                            <path d="M7 10V2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8"></path>
                        </svg>
                        <span>3 Habitaciones</span>
                    </div>
                    <div class="caracteristica-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 2h-20v20h20z"></path>
                            <path d="M6 12h4"></path>
                            <path d="M14 12h4"></path>
                            <path d="M12 6v4"></path>
                            <path d="M12 14v4"></path>
                        </svg>
                        <span>2 Baños completos</span>
                    </div>
                    <div class="caracteristica-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                        <span>100 m²</span>
                    </div>
                    <div class="caracteristica-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        <span>4.5/5 (45 reseñas)</span>
                    </div>
                    <div class="caracteristica-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <rect x="9" y="9" width="6" height="6"></rect>
                        </svg>
                        <span>Estacionamiento</span>
                    </div>
                    <div class="caracteristica-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                            <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                            <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                            <line x1="12" y1="20" x2="12.01" y2="20"></line>
                        </svg>
                        <span>WiFi gratuito</span>
                    </div>
                </div>
            </div>

            <button class="boton-reserva">Reservar ahora</button>
        </div>
    </div>

    <div class="ubicacion-container">
        <h2 class="ubicacion-titulo">Ubicación</h2>
        <div class="mapa-container">
            <div class="mapa-container">
              <img src="img/map2.png" class="mapa" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="direccion">
            <h3>Dirección</h3>
            <p>Casa de Pepe, Barrio Candelaria</p>
            <p>Ocosingo, Chiapas</p>
            <p>CP: 29950</p>
            
        </div>
    </div>
    <div class="contacto-container">
        <h2 class="contacto-titulo">Contactar al Propietario</h2>
        
        <div class="contacto-grid">
            <div class="propietario-info">
                <img src="img/pp1.jpeg" alt="Propietario" class="propietario-foto">
                <p class="propietario-nombre">Jose Jahir</p>
                <div class="propietario-contacto">
                    <a href="#">Llamar ahora</a>
                    <a href="#">Enviar WhatsApp</a>
                </div>
            </div>
            
            <form class="formulario-contacto">
                <div class="form-grupo">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-grupo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-grupo">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono">
                </div>
                <div class="form-grupo">
                    <label for="fechas">Fechas de interés</label>
                    <input type="text" id="fechas" name="fechas" placeholder="ej. 15/05/2025 - 20/05/2025">
                </div>
                <div class="form-grupo">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribe tus preguntas o comentarios"></textarea>
                </div>
                <button type="submit" class="boton-enviar">Enviar Mensaje</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Chepiza</h3>
                <p>Ofrecemos los mejores departamentos en renta en Ocosingo con precios accesibles y excelente ubicación.</p>
            </div>
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>Ocosingo, Chiapas</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 Depas Ocosingo - Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>