<style type="text/css">
  .sidebar-dark-green{
    background: deeppink !important;
  }
  p{
    color: white !important;
  }
</style>
<aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('libs/AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADSI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('libs/AdminLTE/dist/img/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"x>
        </div>
        <div class="info">
           <a class="d-block" href="{{ url('logout')}}" onclick="event.preventDefalt(); document.getElementByID('logout-form').submit();">SABOGAL22</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview"> 
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('aprendices')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Aprendices
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('asistencia')}}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Asistencia
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="{{route('point')}}" class="nav-link">
              <i class="nav-icon fas fa-check-circle"></i>
              <p>
                Puntos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('courses')}}" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Cursos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                Equipos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Instructores
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-people-carry"></i>
              <p>
                Prestamos de Equipos
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>