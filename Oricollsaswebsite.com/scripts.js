document.addEventListener('DOMContentLoaded', function() {
    mostrarSeccion('nosotros');
});

function mostrarSeccion(seccionId) {
    const secciones = document.querySelectorAll('.seccion');
    secciones.forEach(seccion => {
        seccion.style.display = 'none';
    });

    const seccion = document.getElementById(seccionId);
    if (seccion) {
        seccion.style.display = 'block';
    }
}
function mostrarSeccion(seccionId) {
    // Obtén todas las secciones
    const secciones = document.querySelectorAll('main > section');

    // Oculta todas las secciones
    secciones.forEach(seccion => {
        seccion.style.display = 'none';
    });

    // Muestra la sección seleccionada
    const seccionSeleccionada = document.getElementById(seccionId);
    if (seccionSeleccionada) {
        seccionSeleccionada.style.display = 'block';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById("modal");
    const closeButton = document.querySelector(".close-btn");
    const infoButtons = document.querySelectorAll(".info-btn");

    infoButtons.forEach(button => {
        button.addEventListener("click", function() {
            const product = button.getAttribute("data-product");

            // Cambiar contenido según el producto
            if (product === "producto1") {
                document.getElementById("modal-title").textContent = "Alimento para Pollitos";
                document.getElementById("modal-description").textContent = "Este alimento está formulado para satisfacer las necesidades nutricionales de los pollitos...";
            } else if (product === "producto2") {
                document.getElementById("modal-title").textContent = "Alimento para Aves Jóvenes";
                document.getElementById("modal-description").textContent = "Este alimento está diseñado para apoyar el desarrollo de aves jóvenes...";
            } else if (product === "producto3") {
                document.getElementById("modal-title").textContent = "Alimento para Aves Adultas";
                document.getElementById("modal-description").textContent = "Este alimento ayuda a maximizar la producción de huevos y mantener la salud de las aves...";
            } else if (product === "producto3") {
                document.getElementById("modal-title").textContent = "otros";
                document.getElementById("modal-description").textContent = "Prestamos servicio de maquila para la fabricacion de su alimento";
            }
            
            // Mostrar el modal
            modal.style.display = "block";
        });
    });

    closeButton.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Cerrar el modal si el usuario hace clic fuera del contenido
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const subproductButtons = document.querySelectorAll('.subproduct-btn');

    subproductButtons.forEach(button => {
        button.addEventListener('click', function () {
            const subproduct = button.getAttribute('data-subproduct');
            const infoBox = document.getElementById(`${subproduct}-info`);

            // Si el cuadro ya está visible, lo ocultamos
            if (infoBox.style.display === 'block') {
                infoBox.style.display = 'none';
            } else {
                // Ocultar todos los cuadros de información antes de mostrar el nuevo
                const allInfoBoxes = document.querySelectorAll('.subproduct-info');
                allInfoBoxes.forEach(box => {
                    box.style.display = 'none';
                });

                // Mostrar el cuadro correspondiente
                infoBox.style.display = 'block';
            }
        });
    });

    // Opción para cerrar los cuadros al hacer clic fuera
    document.addEventListener('click', function (event) {
        const isButton = event.target.classList.contains('subproduct-btn');
        const isInfoBox = event.target.closest('.subproduct-info');
        if (!isButton && !isInfoBox) {
            const allInfoBoxes = document.querySelectorAll('.subproduct-info');
            allInfoBoxes.forEach(box => {
                box.style.display = 'none';
            });
        }
    });
});
