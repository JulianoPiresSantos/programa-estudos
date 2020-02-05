<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
    protected $fillable = ['nome'];
    protected $guarded = ['id'];
}
