@extends('layouts/master')

@section('content')
<div class="card card-primary" style="margin-left: 2%; margin-right:1%">
    <div class="card-header">
        <h4 class="card-tittle">Agregar Aprendiz</h4>
    </div>
    <div class="card-body">
        <form action="{{route('aprendiz.add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container " style="margin-left: 2%; margin-right :3%;">

            	<div class="row justify-content-center mt-2 mb-5">
                	<div>
                		<label class="form-label" style="margin-top: 5%">Curso Del Aprendiz :
                		</label>
                	</div>
                	<div class="col-md-5">
                		<select class="form-control" name="course_id" id="course_id" required>
						    <option value="" >Seleccione...</option>
						    @foreach($course as $cursos)
						    <option value="{{$cursos->id}}">{{$cursos->code}} - {{$cursos->name}}</option>
						    @endforeach
						 </select>
                	</div>
                </div>

                <div class="row">

                    <div class="col" style="margin-top: 1%; margin-left:3%;">
                        <label for="" class="form-label">Nombre</label>
                        <input style="margin-top:5%" class="form-control" name="name" id="name" type="text" placeholder="Name" data-sb-validations="required" />

                    </div>
                    <div class="col" style="margin-top: 1%; margin-left:3%; ">
                        <label for="" class="form-label">Foto</label>
                        <center>
                        <img  id="imagenSeleccionada" style="max-height: 100px; margin-top:1%">
                        </center>
                        <input class="form-control" name="imagen" id="imagen" type='file'  />

                    </div>
                </div>
                <div class="row" style="margin-top:6%">

                    <div class="col" style="margin-top: 1%; margin-left:3%">
                        <label for="" class="form-label">N. Identificación</label>
                        <input class="form-control" name="document_number" id="identificacion" type="number" placeholder="Numero" data-sb-validations="required" />

                    </div>
                    <div class="col" style="margin-top: 1%; margin-left:3%">
                        <label for="" class="form-label">Telefono</label>
                        <input class="form-control" name="telephone" id="telephone" type="number" placeholder="Telefono" data-sb-validations="required" value="{{ old('telephone')}}" />

                    </div>
                    <div class="col" style="margin-top: 1%; margin-left:3%">
                        <label for="" class="form-label">Correo</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email')}}" placeholder="correo">
                    </div>
                </div>

                

                <div class="row">
                    <div class="col" style="margin-top: 4%; margin-left:3%">
                        <a href="{{route('aprendices')}}" class="btn btn-secondary">Atras</a>
                        	<button type="submit" class="btn btn-primary">Guardar</button>
                        
                    </div>

                </div>

            </div>
        </form>
            <!-- div del card -->
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function (e){
        $('#imagen').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src',e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>


@endsection
