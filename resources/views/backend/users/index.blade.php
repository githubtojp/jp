@extends('app')

@section('htmlheader_title')
Users
@endsection



@section('main-content')
<div class="col-md-12">


	<div class="box">
		
		<div class="box-header">
			<h3>Usuarios Registrados</h3>

			<a href="{{ route('backend.users.create') }}" class="btn btn-primary">
				Crear Nuevo Usuario
				<i class="fa fa-plus"></i>
			</a>
		
		</div>		
		
		<div class="box-body">
			

			<table id="tbl-users" class="table table-bordered table-striped table-hover dataTable">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Email</th>
						<th class="text-center">Editar</th>
						<th class="text-center">Borrar</th>
					</tr>
				</thead>

				<tbody>
					
					@foreach( $users as $user )
						
						<tr>
							<td><a href="{{ route('backend.users.edit', $user->id) }}">{{ $user->name }}</a></td>
							<td>{{ $user->email }}</td>
							<td class="text-center"><a href="{{ route('backend.users.edit', $user->id) }}"><span class="fa fa-edit"></span></a> </td>
							<td class="text-center"><a href="{{ route('backend.users.edit') }}"><span class="fa fa-remove"></span></a></td>
						</tr>

					@endforeach

				</tbody>
					
				<tfoot>
					<tr>
						<th>Nombre</th>
						<th>Email</th>
						<th>Editar</th>
						<th>Borrar</th>
					</tr>					
				</tfoot>

			</table>
		</div>
		
	</div>

</div>		
@endsection


@section('page-scripts')
@endsection