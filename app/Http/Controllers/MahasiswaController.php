<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index',['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
        ]);
        Mahasiswa::create([
            'nama' => $request -> nama,
            'kelas' => $request -> kelas,
            'nim' => $request -> nim,
            'prodi' => $request -> prodi,
        ]);
        return redirect('/mahasiswa');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('admin.mahasiswa.edit',['mahasiswa'=>$mahasiswa]);
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
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request -> nama;
        $mahasiswa->kelas = $request -> kelas;
        $mahasiswa->nim = $request -> nim;
        $mahasiswa->prodi = $request -> prodi;
        
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
    public function search(Request $request)
    {
        if($request->has('search')){
            $mahasiswa = Mahasiswa::where('nama' ,'LIKE','%'.$request->search.'%')->get();
        }
        else{
            $mahasiswa = Mahasiswa::all();
        }
        return view('admin.mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }
}
