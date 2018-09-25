<?php

namespace App\Http\Controllers\Auth;

use App\user_reader;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'user_id' => 'required|string|max:255',
            'user_fname' => 'required|string|max:255',
            'user_lname' => 'required|string|max:255',
            'user_dob' => 'required|string|max:255',
            'user_address' => 'required|string|max:255',
            'user_city' => 'required|string|max:255',
            'user_state' => 'required|string|max:255',
            'user_phone' => 'required|numeric',
            'username' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:user_reader',
            'userpass' => 'required|string|min:6|confirmed',
            'userpass_confirmation'=>'required||string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\user_reader
     */
    protected function create(array $data)
    {
        return user_reader::create([
            'user_id'=>$data['user_id'],
            'user_fname' => $data['user_fname'],
            'user_lname' => $data['user_lname'],
            'username' => $data['username'],
            'userpass' => Hash::make($data['userpass']),
            'user_dob' => $data['user_dob'],
            'user_email' => $data['user_email'],
            'user_phone' => $data['user_phone'],
            'user_address' => $data['user_address'],
            'user_city'=>$data['user_city'],
            'user_state'=>$data['user_state']
        ]);
    }
}
