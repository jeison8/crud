@extends('admin.admin')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Empleados</h3>
            </div>
            <!-- /.box-header -->
            @if(session()->has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{session()->get('success')}}</li>
                </ul>
            </div><br/>
            @endif
            <div class="box-body">
                <div class="col-md-12 text-right">
                    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear</a>
                </div>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><i class="fas fa-user"></i> Nombre</th>
                                <th><i class="fas fa-at"></i> Email</th>
                                <th><i class="fas fa-venus-mars"></i> Sexo</th>
                                <th><i class="fas fa-briefcase"></i> Area</th>
                                <th><i class="fas fa-envelope-square"></i> Boletin</th>
                                <th><i class="far fa-edit"></i> Modificar</th>
                                <th><i class="fas fa-trash-alt"></i> Eliminar</th>
                            </tr>
                        </thead>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td> {{ $usuario->nombre}} </td>
                            <td> {{ $usuario->email }} </td>
                            <td> {{ $usuario->sexo }} </td>
                            <td> {{ $usuario->area->name }} </td>
                            <td> {{ $usuario->boletin == 1 ? 'Si' : 'No' }} </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('usuarios.edit', $usuario->id)}}"><i class="fa fa-edit fa-2x"
                                            aria-hidden="true" title="Editar"></i></a>&nbsp;
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('usuarios.destroy', $usuario->id)}}"><i class="fas fa-trash-alt fa-2x"></i></a>&nbsp;
                                    </div>
                                </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                {{$usuarios->links()}}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection
