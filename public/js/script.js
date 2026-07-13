//=========================================================
// TECHSTORE
// Archivo: script.js
//=========================================================

//=========================================================
// ARREGLO DE PRODUCTOS
//=========================================================

const productos = [

    {
        id: 1,
        nombre: "Laptop Lenovo",
        precio: 45000,
        descripcion: "Laptop Intel Core i5 - 16GB RAM - SSD 512GB",
        imagen: "img/laptop.jpg"
    },

    {
        id: 2,
        nombre: "Monitor Samsung",
        precio: 12000,
        descripcion: "Monitor LED de 24 pulgadas Full HD",
        imagen: "img/monitor.jpg"
    },

    {
        id: 3,
        nombre: "Teclado Mecánico",
        precio: 3500,
        descripcion: "Teclado mecánico retroiluminado",
        imagen: "img/teclado.jpg"
    },

    {
        id: 4,
        nombre: "Mouse Gamer",
        precio: 2200,
        descripcion: "Mouse óptico RGB de alta precisión",
        imagen: "img/mouse.jpg"
    },

    {
        id: 5,
        nombre: "Impresora HP",
        precio: 9800,
        descripcion: "Impresora multifuncional WiFi",
        imagen: "img/impresora.jpg"
    },

    {
        id: 6,
        nombre: "Disco SSD",
        precio: 4200,
        descripcion: "SSD 1TB de alta velocidad",
        imagen: "img/ssd.jpg"
    }

];

//=========================================================
// MOSTRAR PRODUCTOS
//=========================================================

function mostrarProductos() {

    const contenedor = document.getElementById("productos");

    if (!contenedor) return;

    contenedor.innerHTML = "";

    productos.forEach(producto => {

        contenedor.innerHTML += `

        <div class="producto">

            <img src="${producto.imagen}"
                 alt="${producto.nombre}"
                 width="180">

            <h3>${producto.nombre}</h3>

            <p>${producto.descripcion}</p>

            <h4>RD$ ${producto.precio.toLocaleString()}</h4>

            <button onclick="verDetalle(${producto.id})">

                Ver Detalles

            </button>

        </div>

        `;

    });

}

//=========================================================
// VER DETALLE
//=========================================================

function verDetalle(id){

    const producto = productos.find(p => p.id === id);

    alert(

        "Producto: " + producto.nombre +

        "\n\nDescripción: " + producto.descripcion +

        "\n\nPrecio: RD$ " +

        producto.precio.toLocaleString()

    );

}

//=========================================================
// BUSCAR PRODUCTOS
//=========================================================

function buscarProducto(){

    const texto = document
                    .getElementById("buscar")
                    .value
                    .toLowerCase();

    const contenedor = document.getElementById("productos");

    contenedor.innerHTML = "";

    const encontrados = productos.filter(producto =>

        producto.nombre.toLowerCase().includes(texto)

    );

    if(encontrados.length===0){

        contenedor.innerHTML =

        "<h3>No se encontraron productos.</h3>";

        return;

    }

    encontrados.forEach(producto=>{

        contenedor.innerHTML +=`

        <div class="producto">

            <img src="${producto.imagen}"

                 width="180">

            <h3>${producto.nombre}</h3>

            <p>${producto.descripcion}</p>

            <h4>RD$ ${producto.precio.toLocaleString()}</h4>

            <button onclick="verDetalle(${producto.id})">

                Ver Detalles

            </button>

        </div>

        `;

    });

}

//=========================================================
// VALIDAR FORMULARIO
//=========================================================

function enviarFormulario(){

    const nombre=document.getElementById("nombre").value.trim();

    const correo=document.getElementById("correo").value.trim();

    const asunto=document.getElementById("asunto").value.trim();

    const mensaje=document.getElementById("mensaje").value.trim();

    if(

        nombre===""

        ||

        correo===""

        ||

        asunto===""

        ||

        mensaje===""

    ){

        alert("Debe completar todos los campos.");

        return;

    }

    document.getElementById("resultado").innerHTML=

    `

    <h3>Mensaje enviado correctamente.</h3>

    <p>

        Gracias <strong>${nombre}</strong>.

    </p>

    <p>

        Esta aplicación aún NO posee Backend.

    </p>

    <p>

        La información NO ha sido almacenada en una base de datos.

    </p>

    `;

    document.getElementById("frmContacto").reset();

}

//=========================================================
// CARGA AUTOMÁTICA
//=========================================================

document.addEventListener("DOMContentLoaded",function(){

    mostrarProductos();

});