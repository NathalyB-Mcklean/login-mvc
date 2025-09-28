@extends('layouts.app')

@section('content')
<div class="container container-login">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-lock me-2"></i>{{ __('Iniciar Sesión') }}
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope me-1"></i>{{ __('Correo Electrónico') }}
                            </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresa tu correo electrónico">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <i class="fas fa-key me-1"></i>{{ __('Contraseña') }}
                            </label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingresa tu contraseña">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    <i class="fas fa-remember me-1"></i>{{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-sign-in-alt me-2"></i>{{ __('Iniciar Sesión') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center mb-3">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <i class="fas fa-question-circle me-1"></i>{{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            </div>
                        @endif
                        
                        <div class="text-center">
                            <p class="mb-0">¿No tienes cuenta? 
                                <a href="{{ route('register') }}" class="text-decoration-none fw-bold">
                                    <i class="fas fa-user-plus me-1"></i>Regístrate aquí
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection