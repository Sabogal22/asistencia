@extends('layouts/master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cursos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color: black !important;" href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" style="color: black;">Course</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- /.card-header -->
<div class="card card-dark card-outline">
  <div class="card-body">
  	<table id="example2" class="table table-bordered table-hover">
      <thead>
  			<tr>
          <th>Id</th>
          <th>Ficha</th>
          <th>Nombre</th>
          <th><a href="{{route('courses.add')}}" type="button" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i></a></th>
        </tr>
      </thead>
      <tbody>
        @foreach($courses as $course)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$course->code}}</td>
            <td>{{$course->name}}</td>
            <td>
              <a href="{{url('courses/edit/'.$course->id)}}" type="button" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-edit"></i></a>

              <a href="#" type="submit" class="btn btn-danger btn-sm eliminar-curso" data-action="delete" data-object="{{$course->id}}" data-path="courses/delete"><i class="nav-icon fas fa-trash-alt"> </i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript">
  
  

</script>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('js')

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
    $(document).ready( function(){ 

    $(document).on("click", ".eliminar-curso", function() {
      var id = $(this).data('object');
      var url = "{{url('courses/delete/')}}/"+id;
  Swal.fire({
  title: 'Esta seguro de eliminar',
  text: "Aca no sirve control Z!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aceptar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href=url
  }
})    

    });
  });
    
    

  </script>

@endsection

<!-- $(document).ready( function () {
    $('#tblCourses').DataTable();
  
  $(document).on("click", "btn-delete", function () {
    var id = $(this).data('object');
    var url= "{{ url('courses/delete/') }}/"+id;
    
Swal.fire({
  title: 'Esta seguroi de eliminar',
  text: "Aca no sirve control Z!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aceptar!'
}).then((result) => {
  if (result.isConfirmed) {
      window.location.href=url;

      }

})
});

 } );

