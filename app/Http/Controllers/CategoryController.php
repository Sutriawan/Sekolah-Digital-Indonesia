<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',['categories'=>$categories]);
    }
    public function insert()
    {
        return view('admin.category.create');
    }
    public function create(Request $request)
    {
        $rules = [
            'category_name'=>['required', 'min:3', 'max:100'],
        ];
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails())
        {
            return redirect('admin/category/index')
            ->withInput()
            ->withErrors($validation);
        }
        else{
            $data = $request->input();
            try{
                $kategori = New Category;
                $kategori->category_name = $data['category_name'];
                $kategori->save();
                return redirect('/admin/category/index')->with('Tambah Kategori Berhasil');
            }
            catch(Exception $a)
            {
                return redirect('/admin/category/index')->with('Tambah Kategori Gagal');
            }
        }
    }
    public function edite($id)
    {
        $edit = Category::findOrFail($id);
        return view('admin.category.edite',[
            'edit'=>$edit,
           
        ]);
    }
    public function update(Request $request, $id)
    {
        $edit = Category::find($id)->update($request->all()); 
        return redirect('admin/category/index')->with('success',' Data telah diperbaharui!');
    }
    public function destroy($id)
    {
        $kategori = Category::findOrFail($id);
        $kategori->delete();
      
        if($kategori){
           //redirect dengan pesan sukses
           return redirect('admin/category/index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
          //redirect dengan pesan error
          return redirect('admin/category/index')->with(['error' => 'Data Gagal Dihapus!']);
        }

}
}
