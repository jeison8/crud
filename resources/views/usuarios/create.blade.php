@extends('admin.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">CREAR EMPLEADO</h3>
            </div>
            <!-- /.box-header -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
            @else
            <div class="alert alert-info">
                <ul>
                    <li>Los campos con (*) son obligatorios</li>
                </ul>
            </div><br/>
            @endif
            <!-- form start -->
            <form method="post" role="form" action="{{ route('usuarios.store') }}" id="formCrear">
                <div class="box-body">
                    @csrf

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label for="nombre">Nombre Completo*</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres">
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label for="email">Correo electronico*</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Apellidos">
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label class="form-check-label" for="sexo">Sexo*</label>
                        </div>
                        <div class="col-md-9">
                            <strong><input class="form-check-input" type="radio" name="sexo" id="sexo" value="masculino">Masculino</strong>
                        </div>
                        <div class="col-md-2 text-right"></div>
                        <div class="col-md-9">
                            <strong><input class="form-check-input" type="radio" name="sexo" id="sexo" value="femenino">Femenino</strong>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label for="area_id">Area*</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control select2" name="area_id" id="area_id">
                                <option value="">Seleccionar...</option>
                                @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label for="descripcion">Descripcion*</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right"></div>
                        <div class="col-md-9">
                            <input class="form-check-input" name="boletin" type="checkbox" id="boletin" value="1">
                            <label class="form-check-label" for="boletin">Deseo recibir boletin informativo</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        @foreach($roles as $key => $rol)
                            <div class="col-md-2 text-right">
                            @if($key == 0)
                                <label for="rol">Roles*</label>
                            @endif
                            </div>
                            <div class="col-md-9">
                                <input class="form-check-input" name="rol[]" type="checkbox" id="rol{{$rol->id}}" value="{{$rol->id}}">
                                <label class="form-check-label" for="rol">{{$rol->name}}</label>
                            </div>
                        @endforeach
                    </div>
         
                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right"></div>
                        <div class="col-md-9">
                            <button type="submit" id="create" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $( document ).ready(function() {
            $( "#create" ).click(function() {
                $('#formCrear').validate({
                    rules:{
                        nombre:{required:true},
                        email:{required:true},
                        sexo:{required:true},
                        area_id:{required:true},
                        descripcion:{required:true},
                        rol:{required:true}
                    }
                });
            });
        });
    </script>
@endpush