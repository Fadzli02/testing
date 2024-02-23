<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $primaryKey = 'albumId';
    protected $guarded = ['albumId'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function foto()
    {
        return $this->hasMany(Foto::class, 'userId', 'userId');
    }
}
