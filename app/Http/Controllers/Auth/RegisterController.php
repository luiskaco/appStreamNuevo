<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'unique:users', 'numeric', 'min:8'],
            'agency'=>['required','string', 'max:255'],
            // 'agree' => ['required'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // Creamos correos aleatorios
         $date = Carbon::now()->format('ymdhis');
         $name_random =  Str::random(25).$date;
         $email = $name_random."@grupo2020.com" ;

        // Asiganmos los grupos
        //  $today = Carbon::now()->format('Y-m-d');

        //  if($today <= '2022-02-04'){
        //      $grupo = 4;
        //  } else if($today <= '2022-02-05'){
        //      $grupo = 5;
        //  } else if($today <= '2022-02-07'){
        //      $grupo = 7;
        //  }else if($today <= '2022-02-09'){
        //      $grupo = 9;
        //  } else{
        //      $grupo = 10;
        //  }

        return User::create([
            'name' => $data['name'],
            'email' => $email,
            'password' => Hash::make($data['password']),
            'dni' => $data['dni'],
            'agency' => $data['agency'],
            'group'=> getDateEvent(),
            'line'=>1
        ]);

    }

}
