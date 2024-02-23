<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as Michie;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory, Michie;
    
    protected $primaryKey = 'userId';

    // protected $guarded = 'userId'; BODOHHH
    protected $guarded = ['userId'];

    public $timestamps = false;

    public function foto(){
        return $this->hasMany(Foto::class,'userId','userId');
    }

    public function likeFoto(){
        return $this->hasMany(Foto::class,'userId','userId');
    }
}
