<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UselessTests extends Model
{
    protected $fillable = ['name'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
