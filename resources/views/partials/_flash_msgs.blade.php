@if ( session()->has('swal_flash_message'))
	<script>

		swal({   
			title: "{{ session('swal_flash_message.title') }}",   
			text: "{{ session('swal_flash_message.message') }}",   
			type: "{{ session('swal_flash_message.level') }}",   
			timer: 2500,
			showConfirmButton: false,
		});

	</script>

@endif



@if ( session()->has('swal_flash_message_overlay'))

	<script>

		swal({   
			title: "{{ session('swal_flash_message_overlay.title') }}",   
			text: "{{ session('swal_flash_message_overlay.message') }}",   
			type: "{{ session('swal_flash_message_overlay.level') }}",   
			confirmButtonText: "OK" 
		});

	</script>

@endif


@if( session()->has('swal_flash_message_html') )

	<script>

		swal({   
			title: "{{ session('swal_flash_message_html.title') }}",   
			text: "{!! session('swal_flash_message_html.message') !!}",   
			type: "{{ session('swal_flash_message_html.level') }}",   
			html: true,
		});

	</script>


@endif