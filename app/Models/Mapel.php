<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';
    protected $fillable = [
        'id',
        'id_service',
        'mapel_name',
        'author',
        'deskripsi_mapel',
        'materi',
        'image',

    ];
    public function service()
    {
      // Setiap user akan memiliki banyak data
      return $this->hasMany('App\Models\Berita','mapel_id');
    }
    protected $guarded =['id'];
}
