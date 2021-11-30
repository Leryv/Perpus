<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalians';
    protected $guarded = [];
    

    public function books()
    {
        return$this->belongsTo(Book::class);
    }
    public function users()
    {
        return$this->belongsTo(User::class);
    }

}
