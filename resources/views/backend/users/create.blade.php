@extends('app')

@section('htmlheader_title')
Crear nuevo usuario
@endsection

@section('main-content')
<div class="col-md-6">

	
	<div class="box box-info">
		<div class="box-header with-border">
			<h3>
				<i class="fa fa-user"></i>
				Crear Usuario
			</h3>			
		</div>

		@include('backend.partials._user_form')
		
	</div>


</div>	
@endsection