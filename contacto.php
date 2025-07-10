<?php include ('php/head.php');
?>

<?php include ('php/menu.php');
?>

        <div class="contacto-container">
            <h2 class="contacto-titulo">Ponte en Contacto</h2>
            
            <div class="contacto-grid">
                <div class="propietario-info">
                    <img src="img/eqch.jpeg" alt="Propietario" class="propietario-fotoes">
                    <p class="propietario-nombre">La Chepizza</p>
                    <p>Dueños de la empresa</p>
                    
                    <div class="propietario-contacto">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; margin-right: 8px; vertical-align: text-bottom;">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            Llamar: 919 270 7626
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; margin-right: 8px; vertical-align: text-bottom;">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            Correo: LaChepizaOco@gmail.com
                        </a>
                        <a href="" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline; margin-right: 8px; vertical-align: text-bottom;">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
                
                <form class="formulario-contacto">
                    <div class="form-grupo">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="form-grupo">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-grupo">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono">
                    </div>

                    <div class="form-grupo">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" required></textarea>
                    </div>
                    
                    <button type="submit" class="boton-enviar">Enviar Mensaje</button>
                </form>
            </div>
        </div>

        <div class="ubicacion-container">
            <h2 class="ubicacion-titulo">Nuestra Ubicación</h2>
            
            <div class="mapa-container">
              <img src="img/map2.png" class="mapa" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <div class="direccion">
                <h3>Dirección</h3>
                <p><strong>Oficina Principal:</strong> Cam. a Tonina, 29950 Lequilum Ocosingo, Chis.</p>
                <p><strong>Horario de Atención:</strong> Lunes a Viernes de 9:00 am a 6:00 pm </p>
                <p><strong>Teléfono:</strong> 919 270 7626</p>
            </div>
        </div>
        
    </main>

    <?php include ('php/footer.php');
    ?>
</body>
</html>