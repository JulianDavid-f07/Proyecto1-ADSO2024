let cart = []; // Inicializamos un array vacío para el carrito

// Función para agregar productos al carrito
function addToCart(productId, productName, productPrice) {
  // Verifica si el producto ya está en el carrito
  const existingProduct = cart.find(item => item.id === productId);
  
  if (existingProduct) {
    existingProduct.quantity += 1; // Si ya existe, incrementa la cantidad
  } else {
    cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
  }
  updateCart(); // Actualiza el carrito después de añadir el producto
}

// Función para actualizar el carrito (mostrar productos y total)
function updateCart() {
  const cartItemsContainer = document.getElementById('cartItems');
  const cartBtn = document.getElementById('cartBtn');
  const totalAmount = document.getElementById('totalAmount');
  
  // Limpiar el carrito visual
  cartItemsContainer.innerHTML = '';

  let total = 0;
  cart.forEach(item => {
    const listItem = document.createElement('li');
    listItem.textContent = `${item.name} - $${item.price} x ${item.quantity}`;
    cartItemsContainer.appendChild(listItem);
    total += item.price * item.quantity; // Sumar el precio total
  });

  totalAmount.textContent = total; // Actualizar el total
  cartBtn.textContent = `Ver Carrito (${cart.length})`; // Mostrar la cantidad de productos
}

// Mostrar el modal del carrito
const cartModal = document.getElementById('cartModal');
const closeCartBtn = document.getElementById('closeCart');
const cartBtn = document.getElementById('cartBtn');

cartBtn.addEventListener('click', () => {
  cartModal.style.display = 'flex'; // Mostrar el modal cuando se haga clic en el botón de carrito
});

closeCartBtn.addEventListener('click', () => {
  cartModal.style.display = 'none'; // Cerrar el modal cuando se haga clic en "Cerrar"
});

// Agregar productos al carrito cuando se haga clic en los botones
const addToCartButtons = document.querySelectorAll('.add-to-cart');

addToCartButtons.forEach(button => {
  button.addEventListener('click', () => {
    const productElement = button.closest('.product');
    const productId = productElement.getAttribute('data-id'); // Obtener el ID del producto
    const productName = productElement.querySelector('h3').textContent; // Obtener el nombre
    const productPrice = parseFloat(productElement.querySelector('p').textContent.replace('Precio: $', '')); // Obtener el precio
    
    addToCart(productId, productName, productPrice); // Agregar al carrito
  });
});
