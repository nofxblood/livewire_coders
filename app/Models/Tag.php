<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //relacion muchos a muchos
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
