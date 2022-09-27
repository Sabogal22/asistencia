{{$aprendices}}


<div class="card card-outline card-primary" style="margin-left:1%; margin-right:1%">
<div class="card-header">
<h3 class="card-title">Primary Card Example</h3>
</div>
<div class="card-body">

<table id="Table_Apprentices" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>N. Identificacion</th>
                    <th>correo</th>
                    <th>Celular</th>
                    <th>Curso_id</th>
                    <th>Agregar Registros  <a type="button" class="btn btn-outline-primary btn-sm" href="{{route('aprendiz.add')}}" style="margin-left:10%"><i class="fas fa-plus"></i></a></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($aprendices as $aprendice)  <!--la variable $instructors_traer se toma del controlador -->
                  
                    <tr>
  					<td>{{$aprendice->id}}</td>  <!--este metodo hace un autoincrementable de los numeros--}} -->
                    <td><a href="imagen/20220611230609.jpg"><img src="{{$aprendice->imagen}}" style="width: 12rem"></a></td>
                    <td>{{$aprendice->name}}</td>
                    <td>{{$aprendice->document_number}}</td>
                    <td>{{$aprendice->email}}</td>
                    <td>{{$aprendice->telephone}}</td>
 					<td>{{$aprendice->course_id}}</td>
                    <!--Boton Editar-->
                    <td>

                    <div class="row">
                    <a type="button" href="{{route('aprendiz.edit',$aprendice->id)}}" class="btn  btn-outline-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <!--Boton Eliminar-->
                   
                    <form action="{{route('instructors.destroy',$aprendice->id)}}" style="margin-left: 4%" method="POST" id="formEliminar">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>

                    </form>
                    </td>
                    </div>

                  </tr>
                  @endforeach
  </table>



            <script>
            'use strict';
            //debemos crear la clase formEliminar dentro del form del boton borrar
            //recordar que cada registro a eliminar esta contenido en un form
            var forms = document.querySelectorAll('#formEliminar')
            
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault() //esta función impide que se elimine el dato al dar click en eliminar del home
                    event.stopPropagation()
                    Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success');
                                    this.submit(); //este submit se usa para realizar la acción luego de aceptar

                            }
                             })
                }, false)
                })

            </script>

</div>
<div class="card-footer">
The footer of the card
</div>
</div>

