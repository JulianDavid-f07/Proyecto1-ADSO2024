<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oricoll SAS</title>
    <link rel="stylesheet" href="styles.css">
    <title>Login y Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/styles/carrito-com.css"> <!-- Vincula el CSS para los estilos del carrito -->
</head>
<body>
    <header>
        <img src="logo_oricoll.png" alt="Oricoll SAS" class="logo">
        <h1>ORICOLL SAS</h1>
        <button id="cartBtn">Ver Carrito (0)</button> <!-- Muestra la cantidad de productos en el carrito -->
    <!-- Enlace para ver el carrito en una página separada -->
    <a href="carrito-compras.html" id="viewCartLink">Ver Carrito en Página Separada</a>
        <nav>
            <ul>
                <li><a href="#nosotros" onclick="mostrarSeccion('nosotros')">Nosotros</a></li>
                <li><a href="#productos" onclick="mostrarSeccion('productos')">Productos</a></li>
                <li><a href="#fabricacion" onclick="mostrarSeccion('fabricacion')">Fabricación</a></li>
                <li><a href="#regiones" onclick="mostrarSeccion('regiones')">Regiones</a></li>
                <li><a href="#contacto" onclick="mostrarSeccion('contacto')">Contacto</a></li>
                <li><a href="#iniciar-sesion" onclick="mostrarSeccion('iniciar-sesion')">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <section id="nosotros" class="seccion-oculta">
        <h2>Nosotros</h2>
        <div class="nosotros">
        <p>Concentrados Oriente de Colombia SAS, también conocida como Oricoll SAS., es una empresa colombiana fundada en 2021 que se especializa en el servicio de maquila y en la producción, comercialización y distribución de alimentos concentrados para aves de postura. Con la construcción de una nueva fábrica en la vereda San Agustín de Ubaque, la empresa busca mejorar su capacidad productiva y posicionarse como líder en la industria avícola en el oriente de Cundinamarca.</p>

        <p> Fundada por Maier Rolando Martínez y Nury Esperanza Romero, Oricoll S.A.S. ha crecido constantemente desde su establecimiento. La empresa comenzó su operación con el objetivo de satisfacer la demanda de alimentos para avicultores en las regiones de Fómeque, Ubaque, Choachí, La Calera y Cáqueza. En 2025, se prevé el traslado oficial a la nueva planta donde aumentará un gran porcentaje su capacidad de producción.
            </p>
    </div>
    </section>

    <section id="productos" class="seccion">
        <h2>Productos</h2>
        <div class="productos-grid">
            <!-- Producto 1 -->
            <div class="producto-card">
                <img src="img/pollitos.jpg" alt="Alimento para pollitas">
                <h3>Alimento para pollitas</h3>
                <p><strong>Características:</strong> Formulado para satisfacer las necesidades nutricionales de las pollitas durante sus primeras semanas de vida.</p>
                <p><strong>Beneficios:</strong> Promueve un crecimiento saludable y una buena inmunidad.</p>
                <p>Precio: $65.500</p>
        <button class="add-to-cart">Agregar al Carrito</button>
                <button class="info-btn" data-product="pollitos">Más información</button>
            </div>
            <!-- Producto 2 -->
            <div class="producto-card">
                <img src="img/jovenes.jpg" alt="Alimento para aves jóvenes">
                <h3>Alimento para aves jóvenes</h3>
                <p><strong>Características:</strong> Diseñado para apoyar el desarrollo de aves jóvenes antes de que comiencen a poner huevos.</p>
                <p><strong>Beneficios:</strong> Asegura un desarrollo óptimo y una preparación adecuada para la postura.</p>
                <p>Precio: $68.000</p>
        <button class="add-to-cart">Agregar al Carrito</button>
                <button class="info-btn" data-product="jovenes">Más información</button>
            </div>
            <!-- Producto 3 -->
            <div class="producto-card">
                <img src="img/adultas.jpg" alt="Alimento para aves adultas">
                <h3>Alimento para aves adultas</h3>
                <p><strong>Características:</strong> Nutrientes equilibrados para aves en etapa de producción de huevos.</p>
                <p><strong>Beneficios:</strong> Maximiza la producción de huevos y mantiene la salud de las aves.</p>
                <p>Precio: $75.000</p>
        <button class="add-to-cart">Agregar al Carrito</button>
                <button class="info-btn" data-product="adultas">Más información</button>
            </div>
           <!-- Otros productos -->
<div class="producto-card">
    <img src="img/otros.jpg" alt="Otros productos">
    <h3>Otros productos</h3>
    <p>Ofrecemos una variedad de subproductos para complementar la dieta de sus aves.</p>
    <div class="subproductos-container">
        <ul>
            <li><button class="subproduct-btn" data-subproduct="iniciacion">Iniciación</button></li>
            <li><button class="subproduct-btn" data-subproduct="prepostura">Prepostura</button></li>
            <li><button class="subproduct-btn" data-subproduct="ponedora">Ponedora</button></li>
        </ul>
        <div class="subproduct-info-container">
            <!-- Cuadros de información de los subproductos -->
            <div id="iniciacion-info" class="subproduct-info">
                <h4>Iniciación</h4>
                <p>Descripción y detalles de los productos de iniciación.</p>
            </div>
            <div id="prepostura-info" class="subproduct-info">
                <h4>Prepostura</h4>
                <p>Descripción y detalles de los productos de prepostura.</p>
            </div>
            <div id="ponedora-info" class="subproduct-info">
                <h4>Ponedora</h4>
                <p>Descripción y detalles de los productos de ponedora.</p>
            </div>
        </div>
    </div>
    <button class="info-btn" data-product="otros">Más información</button>
</div>
            <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3 id="modal-title">Título del Producto</h3>
            <p id="modal-description">Descripción detallada del producto.</p>
        </div>
        </div>
    </section>    
    <div id="cartModal" class="modal">
        <div class="modal-content">
          <h2>Carrito</h2>
          <ul id="cartItems"></ul> <!-- Aquí se mostrarán los productos añadidos al carrito -->
          <p>Total: $<span id="totalAmount">0</span></p>
          <button id="closeCart">Cerrar</button>
        </div>
      </div>
    
      <script src="assets/scripts/carrito-com.js"></script> <!-- Vincula el JS para la lógica del carrito -->
      <h2>Productos Disponibles:</h2>
    <?php
    include('mostrar_productos.php');  // Incluye los productos de la base de datos
    ?>

    <section id="fabricacion" class="seccion-oculta">
        <h2>Fabricación</h2>
        <p><strong>Proceso de Fabricación:</strong> Utilizamos tecnología avanzada y técnicas de producción eficientes para garantizar la calidad de nuestros productos.</p>
        <p><strong>Calidad:</strong> Controlamos cada etapa del proceso para asegurar que nuestros alimentos cumplan con los más altos estándares de calidad.</p>
        <p><strong>Certificaciones:</strong> Contamos con varias certificaciones que avalan nuestra dedicación a la excelencia.</p>
    </section>

    <section id="regiones" class="seccion-oculta">
        <h2>Regiones</h2>
        <p><strong>Disponibilidad:</strong> Nuestros productos están disponibles en todo el territorio colombiano.</p>
        <p><strong>Servicio al Cliente:</strong> Ofrecemos soporte y asesoría personalizada a nuestros clientes.</p>
        <p><strong>Puntos de Venta:</strong> Contamos con una amplia red de distribuidores y puntos de venta para su conveniencia.</p>
    </section>

    <section id="contacto" class="seccion-oculta">
        <h2>Contacto</h2>
        <form id="contact-form">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
            <button type="submit">Enviar</button>
        </form>
        <p><strong>Información de Contacto:</strong> Puede contactarnos a través de nuestro correo electrónico info@oricollsas.com o llamarnos al +57 320 975 1276.</p>
        <p><strong>Ubicación:</strong> Vereda San Agustin, Ubaque- Cundinamarca.</p>
    </section>

    <section id="iniciar-sesion" class="seccion">
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>
    
                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electrónico">
                        <input type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>
    
                    <!--Register-->
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo">
                        <input type="text" placeholder="Correo Electrónico">
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="assets/js/script.js"></script>
    </section>
</main>

    <footer>
        <p>Prototipo realizado por Julian David Florez y Brayan Estiven Moreno ficha 2721484 ADSO-2024.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
