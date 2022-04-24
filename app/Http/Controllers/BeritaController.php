<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Berita;
use App\Models\Category;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class BeritaController extends Controller
{
    public function index()
    { 
        $data = Berita::with('user')->get();
        $hasil = Category::with('berita')->get();
        return view('admin.blog.index',[
            'news'=>$data,
            'categories'=>$hasil,
        ]);
    }
    public function insert()
    {
        $hasil = Category::all();
        return view('admin.blog.create',['categories'=>$hasil]);
    }
    public function create(Request $request)
    {
        $validateData = $request->validate( [
            'judul'=>['required', 'min:3', 'max:100'],
            'category_id'=>'required',
            'excerpt'=>['required', 'min:3', 'max:100'],
            'body'=>['required', 'min:3', 'max:3000'],
            'tgl_post'=>'required',
            'image'=>'image|file|max:1024',
        ]);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        $validateData['tgl_post'] = $request->tgl_post;
        $validateData['category_id'] = $request->category_id;
        $validateData['image'] = $request->file('image')->store('blog-images');
            
        Berita::Create($validateData);
        return redirect('/admin/blog/index')->with('succes','Add New Post Success');
    }
    public function edit($id)
    {
        $edit = Berita::findOrFail($id);
        $hasil = Category::all();
        return view('admin.blog.edit',[
            'edit'=>$edit,
            'categories'=>$hasil
        ]);
    }
    public function update(Request $request, $id)
    {
        $edit = Berita::find($id)->update($request->all()); 
        return redirect('admin/blog/index')->with('success',' Data telah diperbaharui!');
    }
    public function podcast(){
        return view('admin.podcast.index');
    
    }
}