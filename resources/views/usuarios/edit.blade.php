@extends('admin.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">EDITAR EMPLEADO</h3>
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
            @endif
            <!-- form start -->
            <form method="post" role="form" action="{{ route('usuarios.update', $usuario->id) }}" id="formEdit">
                <div class="box-body">
                    @csrf
                    @method('PATCH')
                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label for="nombre">Nombre Completo*</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres" value="{{$usuario->nombre}}">
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label for="email">Correo electronico*</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Apellidos" value="{{$usuario->email}}">
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label class="form-check-label" for="sexo">Sexo*</label>
                        </div>
                        <div class="col-md-9">
                            <strong><input class="form-check-input" type="radio" name="sexo" id="sexo" value="masculino" {{$usuario->sexo == 'masculino' ? 'checked' : 'masculino' }}>Masculino</strong>
                        </div>
                        <div class="col-md-2 text-right"></div>
                        <div class="col-md-9">
                            <strong><input class="form-check-input" type="radio" name="sexo" id="sexo" value="femenino" {{$usuario->sexo == 'femenino' ? 'checked' : 'femenino' }}>Femenino</strong>
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
                                <option value="{{$area->id}}"{{$usuario->area_id == $area->id ? 'selected' : ''}}>{{$area->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right">
                            <label for="descripcion">Descripcion*</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3">{{$usuario->descripcion}}</textarea>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right"></div>
                        <div class="col-md-9">
                            <input class="form-check-input" name="boletin" type="checkbox" id="boletin" value="1" {{$usuario->boletin == 1 ? 'checked' : ''}}>
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
                                @foreach($rolUsuario as $index => $rolUsu)
                                    @if($rolUsu->rol_id == $rol->id)
                                        <input class="form-check-input" name="rol[]" type="checkbox" id="rol{{$rol->id}}" value="{{$rol->id}}" checked>
                                        <label class="form-check-label" for="rol">{{$rol->name}}</label>
                                        @break
                                    @elseif($index == $conteo-1)
                                        <input class="form-check-input" name="rol[]" type="checkbox" id="rol{{$rol->id}}" value="{{$rol->id}}">
                                        <label class="form-check-label" for="rol">{{$rol->name}}</label>  
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
         
                    <div class="form-group col-md-12">
                        <div class="col-md-2 text-right"></div>
                        <div class="col-md-9">
                            <button type="submit" id="edit" class="btn btn-primary">Guardar</button>
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
            $( "#edit" ).click(function() {
                $('#formEdit').validate({
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