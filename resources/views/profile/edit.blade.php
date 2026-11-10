@extends('layouts.app')

@section('titulo', 'Mi perfil')

@section('contenido')
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <h1 class="h3 fw-bold mb-4">
                    <i class="bi bi-person-circle me-2"></i>Mi perfil
                </h1>

                <!-- Datos personales -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h2 class="h5 fw-bold">Datos personales</h2>
                        <p class="text-muted small">Actualiza tu nombre y correo electrónico.</p>

                        @if (session('status') === 'profile-updated')
                            <div class="alert alert-success">Datos guardados correctamente.</div>
                        @endif

                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input id="name" type="text" name="name"
                                    value="{{ old('name', $user->name) }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    required autocomplete="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" name="email"
                                    value="{{ old('email', $user->email) }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    required autocomplete="username">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>

                <!-- Cambiar contraseña -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h2 class="h5 fw-bold">Cambiar contraseña</h2>
                        <p class="text-muted small">Usa una contraseña larga y difícil de adivinar.</p>

                        @if (session('status') === 'password-updated')
                            <div class="alert alert-success">Contraseña actualizada correctamente.</div>
                        @endif

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="update_password_current_password" class="form-label">Contraseña actual</label>
                                <input id="update_password_current_password" type="password" name="current_password"
                                    class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                    autocomplete="current-password">
                                @error('current_password', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="update_password_password" class="form-label">Nueva contraseña</label>
                                <input id="update_password_password" type="password" name="password"
                                    class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                    autocomplete="new-password">
                                @error('password', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="update_password_password_confirmation" class="form-label">Confirmar contraseña</label>
                                <input id="update_password_password_confirmation" type="password" name="password_confirmation"
                                    class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                                    autocomplete="new-password">
                                @error('password_confirmation', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>

                <!-- Eliminar cuenta -->
                <div class="card shadow-sm border-0 border-danger-subtle mb-4">
                    <div class="card-body p-4">
                        <h2 class="h5 fw-bold text-danger">Eliminar cuenta</h2>
                        <p class="text-muted small">
                            Al eliminar tu cuenta se borrarán todos tus datos de forma permanente.
                        </p>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar">
                            Eliminar cuenta
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Ventana de confirmación -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('profile.destroy') }}" class="modal-content">
                @csrf
                @method('DELETE')

                <div class="modal-header">
                    <h2 class="modal-title h5" id="modalEliminarLabel">¿Seguro que quieres eliminar tu cuenta?</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <div class="modal-body">
                    <p class="text-muted small">
                        Esta acción no se puede deshacer. Escribe tu contraseña para confirmar.
                    </p>

                    <label for="password_eliminar" class="form-label">Contraseña</label>
                    <input id="password_eliminar" type="password" name="password"
                        class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                        placeholder="Contraseña">
                    @error('password', 'userDeletion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar cuenta</button>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->userDeletion->isNotEmpty())
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new bootstrap.Modal(document.getElementById('modalEliminar')).show();
            });
        </script>
    @endif
@endsection