@extends('layouts.home')
@section('title', 'Ingreso')
@section('contenidoBody')
    <div class="d-flex justify-content-center align-items-center">
        <div class="card m-5 p-3 d-flex justify-content-center align-items-center fondo_Login">
            <img class="mb-2 p-2" src="{{ asset('img/logo.png') }}" alt="" width="200" height="200">
            <form method="POST" action="{{ route('login') }}" class="needs-validation submit-prevent-form"
                style="width: 18rem;">
                @csrf
                <div class="form-floating p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Por favor Introduzca un Correo Electronico Valido">
                    <input name="email" value="{{ old('email') }}" type="email"
                        class="form-control bg-c-bla {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        placeholder="Correo Electronico" autofocus>
                    <label style="color:black" for="floatingInput">{{ __('Correo Electronico') }}</label>
                </div>

                <div class="form-floating p-2">
                    <input name="password" type="password"
                        class="form-control bg-c-bla {{ $errors->has('password') ? ' is-invalid' : '' }}"
                        placeholder="contraseña">
                    <label style="color:black">{{ __('Contraseña') }}</label>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-lg bg-success text-light submit-prevent-button m-2">
                        INGRESAR
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
