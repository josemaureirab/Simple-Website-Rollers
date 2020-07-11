<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer Experience</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        @extends('layouts.baseencuesta')

@section('content')        
<div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10">

              <div class="card">
                <div class="card-header ">Encuesta</div>
                  <div class="card-body">
                      <label class= "col-sm text-md-center">¡Tu opinión nos importa!</label>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">Datos Personales</div>
                  <div class="card-body">

                    <div class="form-group row">
                      <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                      <div class="col-md-6">
                        <input id="nombre" type="text" class="form-control" name="nombre" required autofocus></input>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>
                      <div class="col-md-6">
                        <input id="apellido" type="text" class="form-control" name="apellido" required autofocus></input>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>
                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" required></input>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>
                      <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono" required autofocus></input>
                      </div>
                    </div>
                    <div class="form-group row">
                    <div class="Button">    
                    <a href="../askOne" class="btn btn-warning">Siguiente</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</html>
@endsection