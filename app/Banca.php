<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    protected $fillable = ['nome'];
    protected $guarded = ['id'];
}
