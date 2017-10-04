<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div id="app" v-cloak>
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('adminlte::layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
<div class="col-sm-8">
<h2>
listado de Estudiantes
<a href="{{ route('Estudiantes.create')}}" class="btn btn-primary pull-right">Nuevo</a>
</h2>

<table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>cedula</th>
        <th>Primer Nombre</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($estudiantes as $estudiante)
      <tr>
 	<td>{{ $estudiante->id}}</td>
        <td>{{ $estudiante->cedula}}</td>
         <td>{{ $estudiante->primer_nombre}}</td>
	<td>{{ $estudiante->email}}</td>
        <td>
          <a href="{{ route('Estudiantes.show', $estudiante->id) }}" class="btn btn-link" >Ver</a>
        </td>
        <td>
          <a href="{{ route('Estudiantes.edit', $estudiante->id) }}" class="btn btn-link" >Editar</a>
        </td>
        <td>
         
            <form action="{{ route('Estudiantes.destroy', $estudiante->id) }}" method="post">
               {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-link">Borrar</button>
            </form>
        </td>
      </tr>
         @endforeach
    </tbody>
  </table>

	{!! $estudiantes->render()!!}
</div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>

	

