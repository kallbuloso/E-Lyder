<?php

namespace App\Http\Controllers\Auth;

use App\Models\AuthModel;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    private $user;

    //Inject the $user module and store it in our private variable.
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo('oi');
        //$users = \Auth::user();
        // GET ALL USERS ID 
        $users = $this->user->all();
        return view('auth/index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthModel  $authModel
     * @return \Illuminate\Http\Response
     */
    public function show(AuthModel $authModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthModel  $authModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthModel $authModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthModel  $authModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthModel $authModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthModel  $authModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthModel $authModel)
    {
        //
    }
}
