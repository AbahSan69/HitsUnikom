<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lagu;
use App\Models\Album;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtlagu =  Lagu::all();
        return view('Lagu.lagu',compact('dtlagu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtalbum =  Album::all();
        return view('Lagu.tambahlagu',compact('dtalbum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $name=$file->getClientOriginalName();
        $file->storeAs('lagu/',$name,'s3');
        
        Lagu::create([
            'judul' => $request->judul,
            'artis' => $request->artis,
            'gender' => $request->gender,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'file' => $name,
            'id_album' => $request->id_album,
        ]);

        return redirect('datalagu')->withToastSuccess('Data Berhasil Disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Lagu::findorfail($id);
        return view('Lagu.editlagu', compact('edit'));
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
        $edit = Lagu::findorfail($id);
        $edit->update($request->all());
        return redirect('datalagu')->withToastSuccess('Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Lagu::findorfail($id);
        $hapus->delete();
        return back()->withToastSuccess('Data Berhasil Dihapus');
    }
}
