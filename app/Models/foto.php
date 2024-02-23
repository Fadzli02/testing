<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $primaryKey = 'fotoId';
    protected $guarded = ['fotoId'];

    public function user(){
        return $this->belongsTo(User::class, 'userId', 'userId');
    }


}
