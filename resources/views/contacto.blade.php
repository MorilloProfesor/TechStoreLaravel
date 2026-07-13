@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<h2>Contáctanos</h2>

<form id="frmContacto">

    <p>
        <label for="nombre">Nombre</label><br>
        <input type="text" id="nombre" name="nombre">
    </p>

    <p>
        <label for="correo">Correo Electrónico</label><br>
        <input type="email" id="correo" name="correo">
    </p>

    <p>
        <label for="asunto">Asunto</label><br>
        <input type="text" id="asunto" name="asunto">
    </p>

    <p>
        <label for="mensaje">Mensaje</label><br>
        <textarea id="mensaje" name="mensaje"></textarea>
    </p>

    <button type="submit">Enviar</button>

</form>

<div id="resultado"></div>

<hr>

<p>
    <strong>Nota:</strong> En esta etapa el formulario tiene únicamente fines de diseño e integración de la interfaz. Su procesamiento será implementado en una guía posterior, cuando se estudien los controladores, las solicitudes HTTP y la validación de datos en Laravel.
</p>
@endsection