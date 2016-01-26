<?php

namespace jp\Http\Controllers\Backend;

use Illuminate\Http\Request;

use jp\Http\Requests;

use jp\Http\Controllers\Backend\BackEndBaseController;

use jp\User;

use jp\Http\Requests\CreateNewUserRequest;

class UserController extends BackEndBaseController
{

    protected $users;


    public function __construct ( User $users )
    {
        parent::__construct();

        $this->users = $users;
    }



    /**
     * Display the list of users in the backend.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->users->all();


        return view('backend.users.index', compact('users'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( User $user)
    {

        return view('backend.users.create', compact('user'));
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( CreateNewUserRequest $request)
    {
        //
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }



    public function confirm ()
    {
         
    } 



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
