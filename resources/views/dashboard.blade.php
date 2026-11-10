@extends('layouts.app')

@section('titulo', 'Mi panel')

@section('contenido')
    <main class="container py-5">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h1 class="h3 fw-bold">Hola, {{ Auth::user()->name }} 👋</h1>
                <p class="text-muted mb-4">Has iniciado sesión en Agrocompra.</p>

                <a href="{{ route('productos.index') }}" class="btn btn-success me-2">
                    <i class="bi bi-box-seam me-1"></i> Productos
                </a>
                <a href="{{ route('clientes.index') }}" class="btn btn-outline-success">
                    <i class="bi bi-people me-1"></i> Clientes
                </a>
            </div>
        </div>
    </main>
@endsection