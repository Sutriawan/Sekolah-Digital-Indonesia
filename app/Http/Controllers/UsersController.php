<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard.index');
    }
    public function users()
    {
        $hasil = User::all();
        return view('admin.user.users',['data_member'=>$hasil]);
        

    }
    public function create(Request $request){
        $rules = [
            'name'=>['required', 'min:3', 'max:100'],
           'username'=>['required', 'min:3', 'max:100'],
           'email'=>['required','email:dns','min:3', 'max:100',],
           'password'=>['required', 'min:3', 'max:100'],
           'repassword'=>['required', 'min:3', 'max:100']
        ];
        $validation = Validator::make ($request->all(), $rules);
        if ($validation->fails()){
            return redirect ('/admin/user/users')
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
                return redirect('/admin/user/users')->with('TambahUserBerhasil', 'Tambah User Berhasil !');
            }
            catch(Exception $e){
                return redirect('/admin/user/users')->with('TambahUserGagal','Tambah User Gagal');
            }
        }
    }
}
