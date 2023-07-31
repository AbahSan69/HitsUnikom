<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistItem extends Model
{
    protected $table = "playlist";
    protected $primarykey = "id";
    protected $fillable = ["id","id_lagu","id_playlist"];
    public $timestamps = false;
}
