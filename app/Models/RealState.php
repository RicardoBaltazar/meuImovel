<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealState extends Model
{
    protected $table = 'real_state';

    public function user()
    {
        return $this->belongsTo(User::class); //referencia o id da classe chamada quando não passar segundo parametro
    }
}

//obs: quando a importação das classes esta na mesma pasta, não precisar ter importação com use
