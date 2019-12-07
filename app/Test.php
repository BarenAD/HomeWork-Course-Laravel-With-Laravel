<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';
    protected $fillable = ['text', 'is_enabled'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'is_enabled' => 'boolean',
    ];
}
