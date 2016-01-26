<?php

namespace jp\Http\Controllers\Auth;

use jp\User;

use Validator;

use jp\Http\Controllers\Controller;

use jp\Status;

use jp\Role;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->redirectTo = route('backend.dashboard');
        $this->redirectAfterLogout = route('frontend.home');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);


        # handle default roles  and status
        $slugStatus   = isset($data['status-slug']) ? $data['status-slug'] : Status::getDefaultStatusSlug();
        $slugRole     = isset( $data['role-slug'] ) ? $data['role-slug'] : Role::getDefaultRoleSlug();

        $status = Status::getStatusBySlug( $slugStatus );

        $user->status()->associate($status);

        $role = Role::getRoleBySlug( $slugRole );

        $user->attachRole($role);

        $user->save();

        return $user;

    }
}
