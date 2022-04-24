<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = [
        'id',
        'category_name',
    ];
    public function berita()
    {
      // Setiap user akan memiliki banyak data
      return $this->hasMany('App\Models\Berita','category_id');
    }
    protected $guarded =['id'];
}
