/*======================================================
    TECHSTORE
    Proyecto Práctico 2
    Aplicación Conversor de Monedas
======================================================*/

// Esperar que el documento cargue completamente
document.addEventListener("DOMContentLoaded", function(){

    // Obtener elementos HTML
    const btnConvertir = document.getElementById("btnConvertir");
    const txtMonto = document.getElementById("txtMonto");
    const cmbOrigen = document.getElementById("cmbOrigen");
    const cmbDestino = document.getElementById("cmbDestino");
    const lblTasa = document.getElementById("lblTasa");
    const lblResultado = document.getElementById("lblResultado");
    const lblFecha = document.getElementById("lblFecha");

    // Evento botón Convertir

    btnConvertir.addEventListener("click", async function(){

        // Obtener valores
        const monto = txtMonto.value;
        const monedaOrigen = cmbOrigen.value;
        const monedaDestino = cmbDestino.value;

        // Validar información

        if(!validarMonto(monto)){
            return;
        }
        if(!validarMonedas(monedaOrigen, monedaDestino)){
            return;
        }

        // Consultar API
        const datos = await obtenerTasas();

        if(datos == null){
            alert(
                "No fue posible obtener la tasa de cambio."
            );
            return;
        }

        /*
            Obtener tasa según la moneda destino

            Ejemplo:
            USD -> DOP

            monto * tasa
        */
        const tasa =
            datos.conversion_rates[monedaDestino];

        if(tasa == undefined){
            alert(
                "No existe información para esa moneda."
            );
            return;
        }

        // Calcular conversión

        const resultado =
            Number(monto) * tasa;

        // Mostrar resultados

        lblTasa.textContent =
            tasa.toFixed(4);

        lblResultado.textContent =
            `${monto} ${monedaOrigen} = ${resultado.toFixed(2)} ${monedaDestino}`;
        lblFecha.textContent =
            new Date().toLocaleString();
    });
});