<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MarkbarberController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/markbarber';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function markbarber()
    {
        return view('markbarber');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'time' => 'required|int|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cabelo' => 'required|boolean|max:255',
            'barba' => 'required|boolean|max:255',
        ]);
    }
}
