<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Telepon;
use Validator;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $halaman = 'siswa';
       $siswa_list = Siswa::orderBy('nama_siswa','asc')->paginate(10);
       $jumah_siswa = Siswa::count();
       return view ('siswa.index', compact('halaman', 'siswa_list', 'jumah_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $halaman = 'siswa';
        return view('siswa.create', compact('halaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();

        $validator = Validator::make ($input, [
            'nisn'  => 'required|string|size:4|unique:siswa,nisn',
            'nama_siswa'   => 'required|string|max:30',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'no_telepon' => 'sometimes|numeric|digits_between:10,15|unique:telepon,no_telepon',

        ]);

        if ($validator->fails())
        {
            return redirect('siswa/create')->withInput()->withErrors($validator);
        }
        $siswa = Siswa::create($input);
        $telepon = new Telepon();
        $telepon->no_telepon = $request->input('no_telepon');
        $siswa->telepon()->save($telepon);    


        return redirect('siswa');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('halaman', 'siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $siswa  = Siswa::findOrFail($id);
        if ($siswa->telepon)
        {
            $siswa->no_telepon = $siswa->telepon->no_telepon;
        }     
        return  view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $siswa = Siswa::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
             'nisn'  => 'required|string|size:4|unique:siswa,nisn,' . $request->input('id'),
            'nama_siswa'  => 'required|string|max:30',
            'tgl_lahir' =>  'required|date',
            'jenis_kelamin' => 'required|in:L,P', 
            'no_telepon' => 'sometimes|numeric|digits_between:10,15|unique:telepon,no_telepon,' . $request->input('id') . ',id_siswa', 
        ]);

        if ($validator->fails()) {
            return redirect('siswa/' . $id . '/edit')->withInput()->withErrors($validator);
        }       

        $siswa->update($request->all());
        $telepon = $siswa->telepon;
        $telepon->no_telepon = $request->input('no_telepon');
        $siswa->telepon()->save($telepon);
        return  redirect('siswa');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }

    
}

    