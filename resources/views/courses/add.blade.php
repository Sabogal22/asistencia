@extends('layouts/master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Agregar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color: black !important;" href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" style="color: black;">Course</li>
              <li class="breadcrumb-item active" style="color: black;">Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('courses.add')}}">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="code">Ficha</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Titulación</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- /.card -->

<!-- /.content -->
</div>
            
<!-- /.content-wrapper -->
@endsection