@extends('layouts.baseSinContenido')
@section('title', 'offline')
@section('contenidoEnBody')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title
                            text-center">No se puede acceder a la aplicación</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="alert-heading">¡Ups!</h4>
                                        <p>La aplicación no se encuentra disponible en este momento.</p>
                                        <hr>
                                        <p class="mb-0">Por favor, inténtelo de nuevo más tarde.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection