<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "album";
    protected $primarykey = "id";
    protected $fillable = ["id","judul_album","deskripsi"];
    public $timestamps = false;

    public function Lagu(){
        return $this->hasMany(Lagu::class);
    }
}
