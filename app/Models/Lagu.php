<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    protected $table = "lagu";
    protected $primarykey = "id";
    protected $fillable = ["id","judul","artis","gender","penulis","tahun","file","id_album"];
    public $timestamps = false;

    public function Album(){
        return $this->belongsTo(Album::class);
    }
}
