@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <!-- ========================================= -->
    <!-- PRODUCTOS -->
    <!-- ========================================= -->
    <h2>Catálogo de Productos</h2>

    <p>
        En esta página los productos serán cargados dinámicamente
        utilizando JavaScript.
    </p>

    <input type="text" id="buscar" placeholder="Buscar producto...">

    <button onclick="buscarProducto()">
        Buscar
    </button>

    <div id="productos">
        <!-- Aquí JavaScript mostrará los productos -->
    </div>
@endsection
