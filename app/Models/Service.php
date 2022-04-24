<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';
    protected $fillable = [
        'id',
        'mapel_id',
        'service_name',
        'cover',
    ];
    public function mapel()
    {
      // Setiap user akan memiliki banyak data
      return $this->hasMany('App\Models\Mapel','id_service');
    }
    protected $guarded =['id'];
}
