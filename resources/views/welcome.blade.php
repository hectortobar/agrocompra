@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

    <!-- Sección de bienvenida -->
    <header
        id="inicio"
        class="bg-success text-white py-5"
    >
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <span class="badge bg-success text-white mb-3">
                        Productos del campo colombiano
                    </span>

                    <h1 class="display-3 fw-bold">
                        Del campo a tu mesa
                    </h1>

                    <p class="lead">
                        "Descubre una selección de productos del campo
                         con el origen, la frescura y el
                         sabor tradicional de nuestra tierra."
                    </p>

                    <a
                        href="#productos"
                        class="btn btn-warning btn-lg mt-3"
                    >
                        Ver nuestros productos
                    </a>
                </div>

                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <span class="display-1">
                        🧺
                    </span>

                    <h2 class="mt-3">
                        Frescura garantizada
                    </h2>
                </div>

            </div>
        </div>
    </header>

    <!-- Sección de productos -->
    <section id="productos" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Nuestros productos
                </h2>

                <p class="text-secondary">
                    Selecciona tu producto.
                </p>
            </div>

            <div class="row g-4">

                <!-- Tarjeta 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://solofruver.com/wp-content/uploads/2025/09/papa-lavada.jpg"
                                class="card-img-top object-fit-cover"
                                alt="Papa capiro"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-danger align-self-start mb-2">
                                Papa
                            </span>

                            <h3 class="card-title h5">
                                Capiro
                            </h3>

                            <p class="card-text text-secondary">
                                La mejor papa de Nariño.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $50.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://bluxus.com/wp-content/uploads/2025/01/Descubre-el-Mejor-Precio-del-Frijol-Cargamanto-Rojo-en-Colombia.webp"
                                class="card-img-top object-fit-cover"
                                alt="Fríjol lima"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning text-dark align-self-start mb-2">
                                Fríjol
                            </span>

                            <h3 class="card-title h5">
                                Lima
                            </h3>

                            <p class="card-text text-secondary">
                               Cosechas seleccionadas con el sabor auténtico de nuestra tierra.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $100.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoapBh_kAHeudbFmeqyfft5HImXcwbd5HR6mkIo2EEyYVcnf7G6oHP8yE&s=10"
                                class="card-img-top object-fit-cover"
                                alt="Maíz capio"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-info text-dark align-self-start mb-2">
                                Maíz
                            </span>

                            <h3 class="card-title h5">
                                Capio
                            </h3>

                            <p class="card-text text-secondary">
                                Grano blanco y harinoso, cultivado con el orgullo de nuestra tierra.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $70.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCeZPUQwD5QmPmQLDrXnvjcGgM2Z4v9xWpv3kGFv3ANXJMt3H14JA0E1M&s=10"
                                class="card-img-top object-fit-cover"
                                alt="Naranja tangelo"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-primary align-self-start mb-2">
                                Naranja
                            </span>

                            <h3 class="card-title h5">
                                Tangelo
                            </h3>

                            <p class="card-text text-secondary">
                                El balance perfecto entre la dulzura de la mandarina y la jugosidad del campo.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $40.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección nosotros -->
    <section id="nosotros" class="bg-white py-5">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-md-6">
                    <span class="display-1">
                        🌱
                    </span>

                    <h2 class="fw-bold mt-3">
                        Productos cultivados con tradición
                    </h2>

                    <p class="text-secondary">
                        Trabajamos junto a productores locales de Nariño
                        para ofrecerte productos frescos, cultivados con
                        tradición y con el verdadero sabor del campo.
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 bg-warning-subtle">
                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold">
                                ¿Por qué elegirnos?
                            </h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent">
                                    ✓ Productos de origen colombiano
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Cultivo tradicional y sostenible
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Productos frescos
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Atención cercana y amable
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="py-5">
        <div class="container text-center">

            <h2 class="fw-bold">
                Visítanos
            </h2>

            <p class="text-secondary">
                Ven y elige los mejores productos frescos directamente
                del campo a tu hogar.
            </p>

            <div class="row justify-content-center mt-4">

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📍</div>
                            <h3 class="h5">Dirección</h3>
                            <p class="mb-0">San Juan de Pasto, Nariño</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">🕐</div>
                            <h3 class="h5">Horario</h3>
                            <p class="mb-0">Lunes a sábado, 8:00 a. m.–8:00 p. m.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📞</div>
                            <h3 class="h5">Teléfono</h3>
                            <p class="mb-0">300 000 0000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection