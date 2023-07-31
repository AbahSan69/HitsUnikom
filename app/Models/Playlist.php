<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlist";
    protected $primarykey = "id";
    protected $fillable = ["id","judul_playlist","deskripsi"];
    public $timestamps = false;
}
