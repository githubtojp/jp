<?php

namespace jp\Http\Requests;

use jp\Http\Requests\Request;

use Illuminate\Support\Facades\Auth;

class CreateNewUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if( ! Auth::user()->is('admin') ){

            return false;
        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => ['required'],
            'email'     => ['required', 'email', 'unique:users'], 
            'password'  => ['required', 'confirmed'],
        ];
    }




    /**
     * @return forbidden custom message
     */
    public function forbiddenResponse ()
    {
        if( $this->ajax() ){

            return response()->json([
                'error' => 'Acceso denegado',
            ], 401 );
        }

        return flash()->error('Error, Acceso denegado');

    }



    /**
     * @return custom message for validation
     */
    public function messages()
    {

        flash()->error('Error', 'Acceso denegado');

        return [
            'name.required'         => 'Nombre es requerido.',
            'email.required'        => 'Email es requerido.',
            'email.unique'          => 'Email ya existe.',
            'password.required'     => 'Password es requerido.',
            'password.confirmed'    => 'Password confirmacion fallo.',    
        ];
    }

}
