/*======================================================
    TECHSTORE
    Proyecto Práctico 2
    Consumo Exchange Rate API
======================================================*/

const API_KEY = "06abc3d88f418ec8b2812440";
const URL_API =
`https://v6.exchangerate-api.com/v6/06abc3d88f418ec8b2812440/latest/USD`;

async function obtenerTasas(){

    try{
        const respuesta = await fetch(URL_API);
        console.log("Estado API:", respuesta.status);

        if(!respuesta.ok){
            throw new Error(
                "Error HTTP: " + respuesta.status
            );
        }

        const datos = await respuesta.json();
        console.log("Datos recibidos:", datos);
        return datos;
    }catch(error){
        console.error("Error API:", error);
        return null;
    }
}