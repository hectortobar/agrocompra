@extends('layouts.app')

@section('titulo', 'Iniciar sesión')

@section('contenido')
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h1 class="h3 text-center fw-bold mb-4">🍎 Iniciar sesión</h1>

                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    required autofocus autocomplete="username">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input id="password" type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-check mb-3">
                                <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
                                <label for="remember_me" class="form-check-label">Recordarme</label>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-success">Entrar</button>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="text-center mb-2">
                                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                </div>
                            @endif

                            <div class="text-center">
                                ¿No tienes cuenta?
                                <a href="{{ route('register') }}">Regístrate</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection