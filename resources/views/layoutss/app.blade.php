<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>@yield('titulo') | Agrocompra</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <div class="container">

            <!-- Nombre de la página -->
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                🍎 Agrocompra
            </a>

            <!-- Botón para dispositivos móviles -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Mostrar menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Opciones del menú -->
            <div
                class="collapse navbar-collapse"
                id="menuPrincipal"
            >
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}"
                        >
                            <i class="bi bi-house-door me-1"></i> Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/#productos') }}"
                        >
                            <i class="bi bi-laptop me-1"></i> Catálogo
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/#nosotros') }}"
                        >
                            <i class="bi bi-info-circle me-1"></i> Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/#contacto') }}"
                        >
                            <i class="bi bi-envelope me-1"></i> Contacto
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('clientes.index') ? 'active' : '' }}"
                            href="{{ route('clientes.index') }}"
                        >
                            <i class="bi bi-people me-1"></i> Clientes
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('productos.*') ? 'active' : '' }}"
                            href="{{ route('productos.index') }}"
                        >
                            <i class="bi bi-box-seam me-1"></i> Productos
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('contenido')

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4">

        <div class="container">

            <p class="mb-1 fw-bold">
                🍎 Agrocompra
            </p>

            <p class="mb-0 text-white-50">
                Plantilla educativa desarrollada con Laravel y Bootstrap.
            </p>

        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>