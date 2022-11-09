@extends('plantilla')
@section('principal')

@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('listo','tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
    </div>
@endif

<br>

    <div class="car-body container mt-10 col-md-6">
        <div>
             @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        <strong>Formulario incompleto!</strong>{{$error}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endforeach
            @endif
        </div>
        <form class= "bg-light text-center" method="post" action="guardar">
        <FONT FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Registro del Mini Cyber</FONT>

            @csrf 
                
            <div class="mb-3 p-3">
            <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Usuario</label>
            <input type="text"  class="form-control " name="txtUsuario" value="{{old ('txtUsuario')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtUsuario')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">No.computadora</label>
            <input type="int"  class="form-control" name="txtNumero" value="{{old ('txtNumero')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtNumero')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Tiempo</label>
            <input type="int"  class="form-control" name="txtTiempo" value="{{old ('txtTiempo')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtTiempo')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Fecha</label>
            <input type="date"  class="form-control" name="txtFecha" value="{{old ('txtFecha')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtFecha')}}</p>
            </div>
            <div class="p-3 mb-2">
            <button type="submit" class="btn btn btn-outline-success btn-lg text-center">Guardar</button>
            </div>
        
        </form>
    </div>
<br>
@stop