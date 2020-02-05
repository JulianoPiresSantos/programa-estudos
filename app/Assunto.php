<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{


    public function parent()
    {
        return $this->belongsTo(Assunto::class);
    }

}
