<?php  

namespace jp\Http;


class Flash {


	/**
	 * Add a KEY flash in laravel's sesion object
	 */
	public function create ( $title, $message, $level, $key = 'swal_flash_message' )
	{
		# 
		session()->flash( $key, [
			'title' 	=> $title,
			'message'	=> $message,
			'level'		=> $level // default message state
		]);
		
	}


	public function info ( $title, $message )
	{
		return $this->create( $title, $message, 'info' );
	}


	public function success ( $title, $message )
	{
		return $this->create( $title, $message, 'success');		
	}


	public function error ( $title, $message )
	{	
		return $this->create( $title, $message, 'error' );
	}


	public function overlay ( $title, $message, $level )
	{
		return $this->create( $title, $message, $level, 'swal_flash_message_overlay'  );
	}


	public function html( $title, $message, $level )
	{
		return $this->create( $title, $this->formatMessage($message), $level, 'swal_flash_message_html' );
	}


	public function  formatMessage ( $message )
	{
		
		if( is_array($message) ){

			$outPutMsg = "<ul class='list-unstyled'>";

			foreach( $message as $msg ){

				$outPutMsg .= "<li>" . $msg . "</li>";
			}

			return $outPutMsg .= "</ul>";
		}



		return $outPutMsg;

	}

} 