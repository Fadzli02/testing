<?php

// Gagal

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likeTrait extends Model
{
    use HasFactory;

    public function like(){
        return $this->morphMany('App\likefoto','likeable');
    }

    public function YouLikeIt(){
        $like = new likefoto();
        $like ->userId = auth()->user()->id;

        $this->likes()->save($like);

        return $like;
    }

    public function YouLiked(){
        return !!$this->likes()->where('userId',auth()->id())->count();
    }

    public function YouUnlike(){
        $this->likes()->where('userId',auth()->id())->delete();
        
    }
}
