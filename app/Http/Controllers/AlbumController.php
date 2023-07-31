<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Lagu;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtalbum =  Album::all();
        return view('Album.album',compact('dtalbum'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Album::create([
            'judul_album' => $request->judul_album,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('dataalbum')->withToastSuccess('Data Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editalbum = Album::findorfail($id);
        return view('Album.editalbum', compact('editalbum'));
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
        $editalbum = Album::findorfail($id);
        $editalbum->update($request->all());
        return redirect('dataalbum')->withToastSuccess('Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Album::findorfail($id);
        $hapus->delete();
        return back()->withToastSuccess('Data Berhasil Dihapus');
    }

    public function detailalbum($id){
        $detail = Album::findorfail($id);
        $lagu = Lagu::where('id_album', $detail->id)->get();
        return view('Album.albumdetail', compact('detail','lagu'));
    }
}
