<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />

    

    <title>TallerIntegracion</title>
</head>
<body>
@include('sidebar')
    <style>
        .puntero{
            cursor: pointer;
        }
        .ocultar{
            display: none;
        }
    </style>

    <div class="container">
        <h1>CREAR FORMULARIO</h1>
    </div>
   

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <form id="form_formulario">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Nombre Formulario</label>
                            <input type="text" class="form-control" name="nombre_formulario">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-secondary" id="agregar">Agregar campo +</button>
                        </div>
                    </div>

                    <div class="form-row clonar mt-2">
                            <div class="row border rounded">
                                <div class="col mt-2 mb-2">
                                    <select class="form-select" aria-label="Default select example" name="tablas[]" id="tablas" form="carform">
                                        <option value="" selected disabled hidden>Seleccionar Tabla</option>
                                        @foreach($listado as $dato)
                                        <option value="{{$dato->name}}">{{$dato->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col mt-2 mb-2">
                                    <select class="form-select" aria-label="Default select example" name="campos[]" id="campos" form="carform">
                                        <option value="" selected disabled hidden>Seleccionar Campo</option>
       
                                        
                                     
                                    </select>
                                </div>
                                <div class="col mt-2 mb-2">
                                    <select class="form-select" aria-label="Default select example" name="visibilidad[]" id="visibilidad" form="carform">
                                        <option value="" selected disabled hidden>Seleccionar Visibilidad</option>
                                        <option value="1">Si</option>
                                        <option value="1">No</option>
                                    </select>
                                </div>
                                <div class="col mt-2 mb-2 text-center">
                                    <button type="button" class="btn btn-danger puntero ocultar">Eliminar</button>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    
                    <div id="contenedor"> 
                    </div>

                    <div class="form-row mt-2 mb-2">
                        <div class="col-md-12">
                            <button class="btn btn-success" id="Guardar_Contacto">Guardar</button>
                        </div> 
                    </div>
            </form>
        </div>
    </div>
    </div>
    
    
        <!-- JavaScript -->
    <script src="{{ mix('js/app.js') }}" type="text/javascript" ></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/formulario.js') }}" ></script>
    <script src="{{ asset('js/Form.js') }}" ></script>
</body>
</html>