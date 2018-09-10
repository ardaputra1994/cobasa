<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
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

        ]);

        if ($validator->fails())
        {
            return redirect('siswa/create')->withInput()->withErrors($validator);
        }
        Siswa::create($input);
        return redirect('siswa');
        //
        // $siswa = new \App\Siswa;
        // $siswa->nisn          = $request->nisn;
        // $siswa->nama_siswa    = $request->nama_siswa;
        // $siswa->tgl_lahir     = $request->tgl_lahir;
        // $siswa->jenis_kelamin = $request->jenis_kelamin;
        // $siswa->save();
        // return redirect('siswa');
        // Siswa::create($request->all());
        // return redirect('siswa');
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
        $siswa->update($request->all());
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

    public function tesCollection()
    {
   
       $data = 
       [
            ['nisn' => '1001', 'nama_siswa' => 'Agus Yulianto'],
            ['nisn' => '1002', 'nama_siswa' => 'Agu Yulianto'],
            ['nisn' => '1003', 'nama_siswa' => 'Agus Yuli'],
            ['nisn' => '1004', 'nama_siswa' => 'Agung Yulianto'],
       ];
       $koleksi = collect($data);
       $koleksi->tojson();
       return $koleksi;
      
        
    }

    public function dateMutator()
    {
        $siswa=Siswa::findOrFail(1);
        $str = 'Tanggal Lahir :' . $siswa->tgl_lahir->format('d-m-Y') . '<br>' . 
        'Ulang Tahun Saya : ' . '<strong>' . $siswa->tgl_lahir->addYears(30)->format('d-m-Y') .'</strong>';

        return $str; 
        
    }
}

    