<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'postingan';
    protected $fillable = [
        'id',
        'user_id',
        'judul',
        'category_id',
        'excerpt',
        'tgl_post',
        'body',
        'image',
    ];
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
     }
    protected $guarded =['id'];
    
}
