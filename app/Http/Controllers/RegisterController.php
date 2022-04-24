<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register.index', [
            'titel'=>'register',
            'active'=>'register'
        ]);
}
    public function create(Request $request){
        $rules = [
            'name'=>['required', 'min:3', 'max:255'],
           'username'=>['required', 'min:3', 'max:255'],
           'email'=>['required','email:dns','min:3', 'max:255',],
           'password'=>['required', 'min:3', 'max:255'],
           'repassword'=>['required', 'min:3', 'max:255']
        ];
        $validation = Validator::make ($request->all(), $rules);
        if ($validation->fails()){
            return redirect ('admin/login')
            ->withInput()
            ->withErrors($validation);
        }
        else{
            $data = $request->input();
            try{
                $users = New User;
                $users->name = $data['name'];
                $users->username = $data['username'];
                $users->email = $data['email'];
                $users->password = bcrypt($data['password']);
                $users->repassword = bcrypt($data['repassword']);
                $users->save();
                return redirect('admin/login')->with('status', 'Registrasi Berhasil !');
            }
            catch(Exception $e){
                return redirect('admin/login')->with('status','Registrasi Gagal');
            }
        }
    }
}
