<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Service;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapeledu = Mapel::all();
        return view('admin.service.index', ['data_mapel' => $mapeledu]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_service = Service::all();
       return view('admin.mapel.create', ['data_services'=>$data_service]);
    }
    public function store(Request $request)
    {
        $rules = [
            'id_service'=>['required', 'min:1', 'max:100'],
            'mapel_name'=>['required', 'min:1', 'max:200'],
            'author'=>['required', 'min:1', 'max:200'],
            'deskripsi_mapel'=>['required', 'min:1', 'max:3000'],
            'materi'=>['required', 'min:1', 'max:200'],
            'image'=>'image|file|max:1024',
        ];
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails())
        {
            return redirect('admin/mapel/index')
            ->withInput()
            ->withErrors($validation);
        }
        else{
            $data = $request->input();
            try{
                $mapels = New Mapel;
                $mapels->id_service = $data['id_service'];
                $mapels->mapel_name = $data['mapel_name'];
                $mapels->author = $data['author'];
                $mapels->deskripsi = $data['deskripsi'];
                $mapels->materi = $data['materi'];
                $mapels->image = $data['image'];
                $mapels->save();
                return redirect('/admin/mapel/index')->with('Tambah Mata Pelajaran Berhasil');
            }
            catch(Exception $a)
            {
                return redirect('/admin/mapel/index')->with('Tambah Mata Pelajaran Gagal');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        //
    }
}
