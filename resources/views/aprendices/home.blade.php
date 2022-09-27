@extends('layouts/master')

@section('content')

<div class="col">
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Primary Card Example</h3>
</div>
<div class="card-body">
  <select class="form-control" name="course_id" id="course_id" required>
    <option value="" >Seleccione...</option>
    @foreach($course as $cursos)
    <option value="{{$cursos->id}}">{{$cursos->code}}-{{$cursos->name}}</option>
    @endforeach
  </select>

    {{--este div mostrará todos los aprendices relacionados con el id del curso--}}
    <div id="divAprendices" class="mt-4">
      
    </div>

</div>
<div class="card-footer">
The footer of the card
</div>
</div>
</div>

  @endsection

	@section('scriptsJS')
  <script>
      $(document).on("change","#course_id", function(){  //change se utiliza para saber si hay cambios en el section "click" se puede utilizar cuando se da click en un boton
        //alert($(this).val());  //la función de val me trae el id de los cursos para traer todos los datos relacionados y este es un alert para mostrar el id; también se puede colocar alert('mensaje'); para saber si entró a la función.

        
        //inicio del ajax

         $.ajaxSetup({
           headers:{
             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
           }
         });
         $.ajax({
           method: "get",
           url: 'http://loginadsi.test:8081/aprendices/search/'+$(this).val(),
           data: {}
         })
         .done(function(html){
           $("#divAprendices").html(html);
         })

        //fin del ajax
      });
  </script>

@endsection

@section('scriptsJS')
    <script type="text/javascript">
    $(document).ready( function (){
        $('#Table_Instructors').DataTable();
    });
    </script>
@endsection		
