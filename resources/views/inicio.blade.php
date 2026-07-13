@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<section class="bienvenida">
    <h2>Bienvenido a TechStore</h2>

    <p>
        Bienvenido a <strong>TechStore</strong>, su tienda especializada en soluciones tecnológicas.
        Nos dedicamos a la comercialización de equipos informáticos, dispositivos electrónicos,
        accesorios y servicios tecnológicos orientados a satisfacer las necesidades de estudiantes,
        profesionales, empresas y público en general.
    </p>

    <p>
        En TechStore creemos que la tecnología constituye una herramienta fundamental para el
        aprendizaje, el trabajo y la innovación; por ello ofrecemos productos de calidad,
        asesoría especializada y un servicio personalizado para cada uno de nuestros clientes.
    </p>
</section>

<hr>

<section class="servicios">
    <h2>Nuestros Servicios</h2>

    <ul>
        <li>Venta de laptops y computadoras de escritorio.</li>
        <li>Accesorios tecnológicos y periféricos.</li>
        <li>Componentes para actualización de equipos.</li>
        <li>Asesoría informática personalizada.</li>
        <li>Mantenimiento y soporte técnico.</li>
        <li>Instalación y configuración de software.</li>
    </ul>
</section>

<hr>

<section class="destacados">

    <h2>¿Por qué elegir TechStore?</h2>

    <article>
        <h3>Productos de calidad</h3>
        <p>
            Comercializamos equipos y accesorios de fabricantes reconocidos, garantizando
            confiabilidad y excelente desempeño.
        </p>
    </article>

    <article>
        <h3>Atención personalizada</h3>
        <p>
            Nuestro personal le orientará en la selección del producto que mejor se adapte a
            sus necesidades y presupuesto.
        </p>
    </article>

    <article>
        <h3>Garantía y soporte</h3>
        <p>
            Todos nuestros productos cuentan con garantía y respaldo técnico para ofrecer una
            experiencia de compra segura.
        </p>
    </article>

</section>

<hr>

<section class="vision">

    <h2>Compromiso con la innovación</h2>

    <p>
        Nuestro objetivo es acercar la tecnología a todos los usuarios mediante soluciones
        modernas, accesibles y de alto rendimiento, promoviendo el uso responsable de las
        herramientas digitales para el desarrollo académico, profesional y empresarial.
    </p>

</section>

@endsection


