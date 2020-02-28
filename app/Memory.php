<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    //
    protected $fillable = ['title', 'subtitle', 'content', 'img', 'color'];

    public function added()
    {
        return $this->created_at->diffForHumans();
    }
}
