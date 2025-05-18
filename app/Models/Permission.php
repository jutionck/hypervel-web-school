<?php

declare (strict_types = 1);

namespace App\Models;

use App\Models\Model;

class Permission extends Model
{
    /**
     * The attributes that are mass assignable.
     */

    protected $primaryKey = 'id';
    protected $keyType    = 'string';
    public $incrementing  = false;

    protected $fillable = [
        'name',
        'guard_name',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
