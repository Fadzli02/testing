<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {

        $valid = request()->validate([
            'username' => 'unique:users,username',
            'email' => 'email:rfc,dns|unique:users,email',
        ]);

        // $name = ['namaLengkap' => request ('fullname')];
        // $pw = Hash::make('password');
        // $alamat = [
        //     'alamat' => request('alamat')
        // ];

        $data = [
            'username' => $valid['username'],
            'password' => Hash::make(request('password')),
            'email' => $valid['email'],
            'namaLengkap' => request('fullname'),
            'alamat' => request('alamat'),
        ];

        // dd($data);
        // $data = [
        //     'namaLengkap' => request('fullname'),
        //     'username' => request('username'),
        //     'email' => request('email'),
        //     'password' => Hash::make(request('password')),
        //     'alamat' => request('alamat')
        // ];



        if (User::create($data)) {
            session()->flash('succes', 'Berhasil Membuat Akun');
            return redirect('/login');
        } else {
            session()->flash('falid', 'Gagal Membuat Akun');
            return redirect('/regis');
        }
    }

    public function login()
    {

        $user = User::where('username', request('user'))->first();

        if (!$user) {
            session()->flash('gagal', 'Username or password invalid');
            return back();
        }
        
        $data = [
            'username' => request('user'),
            'password' => request('password')
        ];
        
        if (Auth::attempt($data)) {
            request()->session()->regenerate();
            return redirect('/');

        } else {
            session()->flash('gagal', 'Login Gagal');
            return redirect('/login');
        }
    }

    public function signout(){
        Auth::logout();

        request()->session() -> invalidate();
        request()->session() -> regenerateToken();

        return redirect('/login');
    }
}
