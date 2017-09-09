@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" method="POST" action={{ url('/createPersona') }} accept-charset="UTF-8">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Persona</legend>

                    <!-- Name input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                      <div class="col-md-4">
                      <input id="nombre" name="nombre" type="text" placeholder="Ej: Juan Perez" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- dni input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="dni">DNI</label>  
                      <div class="col-md-4">
                      <input id="dni" name="dni" type="text" placeholder="ej: 00.000.000" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Edad input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="edad">Edad</label>  
                      <div class="col-md-4">
                      <input id="edad" name="edad" type="number" placeholder="ej:18" class="form-control input-md" min="18" max="105" required="">
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Trabajo</label>  
                      <div class="col-md-4">
                      <input id="textinput" name="textinput" type="text" placeholder="ej:Desarrollador Backend" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="submit"></label>
                      <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
