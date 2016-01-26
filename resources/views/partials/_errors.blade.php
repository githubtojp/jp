{{-- display any errors on the page --}}
@if( $errors->any() )
	
	<div class="row">
	<div class="col-xs-12">
	
		<div class="box">
			
			<div class="alert alert-danger alert-dismissible">
				
				<ul class="list-unstyled">
					
					<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4><i class="icon fa fa-ban"></i> Error!</h4>

					@foreach ( $errors->all()  as $error )
						
						<li> {{ $error }} </li>

					@endforeach
				</ul>
			
			</div>
	
		</div>

	</div>
	</div>

@endif	
