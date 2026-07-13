@extends('layouts.app')

@section('title', 'Conversión')

@section('content')
    <!-- ========================================= -->
    <!-- CONVERSOR DE MONEDAS -->
    <!-- ========================================= -->
    <section class="contenedor">
        <h2>Conversor de Monedas</h2>

        <p>
            Utilice esta herramienta para convertir montos entre diferentes
            monedas utilizando la tasa de cambio vigente obtenida mediante una API.
        </p>

        <form id="frmConversion">
            <div class="grupo">
                <label for="txtMonto">Monto</label>
                <input
                    type="number"
                    id="txtMonto"
                    name="monto"
                    placeholder="Digite el monto"
                    min="0"
                    step="0.01"
                    required>
            </div>

            <div class="grupo">
                <label for="cmbOrigen">Moneda de origen</label>
                <select id="cmbOrigen" name="origen">
                    <option value="USD">Dólar Estadounidense (USD)</option>
                    <option value="EUR">Euro (EUR)</option>
                </select>
            </div>

            <div class="grupo">
                <label for="cmbDestino">Moneda destino</label>
                <select id="cmbDestino" name="destino">
                    <option value="DOP">Peso Dominicano (DOP)</option>
                    <option value="USD">Dólar Estadounidense (USD)</option>
                    <option value="EUR">Euro (EUR)</option>
                </select>
            </div>

            <div class="botones">
                <button type="button" id="btnConvertir">Convertir</button>
                <button type="reset">Limpiar</button>
            </div>
        </form>

        <hr>

        <section id="resultado">
            <h3>Resultado de la Conversión</h3>
            <p>
                <strong>Tasa de cambio:</strong>
                <span id="lblTasa">--</span>
            </p>
            <p>
                <strong>Resultado:</strong>
                <span id="lblResultado">--</span>
            </p>
            <p>
                <strong>Fecha de actualización:</strong>
                <span id="lblFecha">--</span>
            </p>
        </section>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/validaciones.js') }}"></script>
    <script src="{{ asset('js/api.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
