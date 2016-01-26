{!! Form::model($user, [
	'method' 	=> $user->exists ? 'put' : 'post',
	'route'		=> $user->exists ? ['bakcend.users.edit', $user->id ] : ['backend.users.store'],
	'class'		=> 'form-horizontal'
]) !!}

	<div class="box-body">

		<div class="form-group">
			<label class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
				{!! Form::text('name', null, ['class'=> 'form-control input-lg', 'data-rules' => 'required', 'placeholder' => 'Nombre completo del usuario']) !!}
			</div>	
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				{!! Form::text('email', null, ['class'=> 'form-control input-lg', 'data-rules' => 'required|email', 'placeholder' => 'Email']) !!}
			</div>	
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				{!! Form::password('password', ['class'=> 'form-control input-lg', 'data-rules' => 'required', 'placeholder' => 'Password']) !!}
			</div>	
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">Confirmar Password</label>
			<div class="col-sm-10">
				{!! Form::password('password_confirmation', ['class'=> 'form-control input-lg', 'data-rules' => 'required', 'placeholder' => 'Repetir password', 'id' => 'password_confirmation' ]) !!}
			</div>	
		</div>

	</div> {{-- ./box-body --}}

	<div class="box-footer">
		
		{!! Form::submit( $user->exists ? 'Salvar Cambios' : 'Crear Usuario', ['class'=> 'btn btn-primary'] ) !!}
		
	</div>
					

{!! Form::close() !!}