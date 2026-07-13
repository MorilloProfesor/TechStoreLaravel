/*======================================================
    TECHSTORE
    Proyecto Práctico 2
    Validaciones del Conversor
======================================================*/


/*======================================================
    VALIDAR MONTO
======================================================*/

function validarMonto(monto){

    if(monto === ""){

        alert("Debe ingresar un monto.");

        return false;
    }


    if(isNaN(monto)){

        alert("El valor ingresado debe ser numérico.");

        return false;
    }


    if(Number(monto) <= 0){

        alert("El monto debe ser mayor que cero.");

        return false;
    }


    return true;

}


/*======================================================
    VALIDAR MONEDAS
======================================================*/

function validarMonedas(origen, destino){

    if(origen === destino){

        alert(
            "La moneda de origen y destino deben ser diferentes."
        );

        return false;
    }


    return true;

}