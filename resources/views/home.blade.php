@extends('layouts.app')

@section('content')
<div class="container container-login">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Card de bienvenida principal -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-tachometer-alt me-2"></i>{{ __('Panel de Control') }}
                </div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <!-- Mensaje de bienvenida -->
                        <div class="col-md-12 text-center mb-4">
                            <h2 class="mb-3">
                                <i class="fas fa-user-circle me-2 text-primary"></i>
                                ¡Bienvenido/a, {{ Auth::user()->name }}!
                            </h2>
                            <p class="text-muted mb-0">
                                <i class="fas fa-calendar me-2"></i>
                                Último acceso: {{ now()->format('d/m/Y H:i') }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Tarjetas de información -->
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 border-0" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                <div class="card-body text-white text-center">
                                    <i class="fas fa-user fa-2x mb-3"></i>
                                    <h5>Perfil</h5>
                                    <p class="mb-0">Gestiona tu información personal</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 border-0" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                <div class="card-body text-white text-center">
                                    <i class="fas fa-cog fa-2x mb-3"></i>
                                    <h5>Configuración</h5>
                                    <p class="mb-0">Personaliza tu experiencia</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card h-100 border-0" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                <div class="card-body text-white text-center">
                                    <i class="fas fa-chart-bar fa-2x mb-3"></i>
                                    <h5>Estadísticas</h5>
                                    <p class="mb-0">Ve tu actividad reciente</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Información adicional -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-info-circle me-2"></i>Información del Sistema
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="fas fa-envelope text-primary me-2"></i>
                                    <strong>Email:</strong> {{ Auth::user()->email }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-calendar-plus text-success me-2"></i>
                                    <strong>Registrado:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-code text-info me-2"></i>
                                    <strong>Framework:</strong> Laravel {{ app()->version() }}
                                </li>
                                <li class="mb-0">
                                    <i class="fas fa-server text-warning me-2"></i>
                                    <strong>PHP:</strong> {{ phpversion() }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-rocket me-2"></i>Acciones Rápidas
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-edit me-2"></i>Editar Perfil
                                </button>
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fas fa-key me-2"></i>Cambiar Contraseña
                                </button>
                                <a href="{{ route('logout') }}" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   class="btn btn-outline-danger">
                                    <i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mensaje de desarrollo -->
            <div class="text-center mt-4">
                <p class="text-muted">
                    <i class="fas fa-graduation-cap me-2"></i>
                    Sistema desarrollado como parte del <strong>Laboratorio #2</strong> de Ingeniería Web
                </p>
                <p class="text-muted mb-0">
                    <i class="fas fa-university me-2"></i>
                    Universidad Tecnológica de Panamá - UTP 2025
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Form oculto para logout -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
@endsection