<!DOCTYPE html>

<html lang="en">

@include('layouts.partials.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('layouts.partials.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container --> 
  @include('layouts.partials.aside')

   @section('content')
   @show

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.partials.footer')

</div>

<!-- ./wrapper -->
@include('layouts.partials.aside2')
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('layouts.partials.scripts')

@yield('js')

</body>
</html>
