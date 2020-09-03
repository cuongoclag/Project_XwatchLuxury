<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tin_tuc extends Model
{
    protected $table = 'tin_tuc';
    protected $fillable = [
        'id',
        'name',
        'short_description',
        'detail',
        'image',
        'created_at',
        'updated_at',
        'trang_thai'
    ];
}
