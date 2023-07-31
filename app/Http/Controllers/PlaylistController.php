<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtplaylist =  Playlist::all();
        return view('Playlist.playlist',compact('dtplaylist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Playlist::create([
            'judul_playlist' => $request->judul_playlist,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('dataplaylist')->withToastSuccess('Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = playlist::findorfail($id);
        $hapus->delete();
        return back()->withToastSuccess('Data Berhasil Dihapus');
    }

    public function detailplaylist($id){
        $detail = playlist::findorfail($id);
        return view('Playlist.playlistdetail', compact('detail'));
    }
}
