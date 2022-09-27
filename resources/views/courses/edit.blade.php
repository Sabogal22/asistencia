@extends('layouts/master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Titulacion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color: black !important;" href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" style="color: black;">Course</li>
              <li class="breadcrumb-item active" style="color: black;">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="card card-primary card-outline">
    <form method="post" action="{{ route('course.edit') }}">
        @csrf
        <input type="hidden" name="id" value="{{$courses->id}}" required>
    <div class="card-body">
     <div class="form-group">
         <label for="exampleInputEmail">Ficha</label>
         <input type="text" class="form-control" id="code" name="code"
          value="{{$courses->code}}" required>
     </div>
     <div class="form-group">
         <label for="exampleInputPassword1">Titulación</label> 
         <input type="text" class="form-control" id="name" name="name"
         value="{{$courses->name}}" required>
     </div>
    </div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form> 
</div>
</div>
</div>
</div>
</div>
    <!-- /.card -->

<!-- /.content -->
</div>
            
<!-- /.content-wrapper -->
@endsection