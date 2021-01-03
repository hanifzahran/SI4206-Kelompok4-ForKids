<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\ParentChild;
use App\Models\Child;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $ortu = User::create([
            'name' => $data['nama_ortu'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'isParent' => 1,
        ]);

        $ortu_data = ParentChild::create([
            'user_id' => $ortu->id,
            'tanggal_lahir' => $data['tanggal_lahir_ortu'],
            'alamat' => $data['alamat_ortu'],
            'hp' => $data['hp_ortu']
        ]);

        foreach($data['nama_anak'] as $key => $value) {
            $anak = User::create([
                'name' => $value,
                'email' => $data['email_anak'][$key],
                'password' => Hash::make($data['password_anak'][$key]),
                'isChild' => 1,
            ]);

            $anak_data = Child::create([
                'user_id' => $anak->id,
                'parent_child_id' => $ortu_data->id,
                'tanggal_lahir' => $data['tanggal_lahir_anak'][$key],
                'alamat' => $data['alamat_anak'][$key],
                'hp' => $data['hp_anak'][$key]
            ]);
        }

        return $ortu;
    }
}
