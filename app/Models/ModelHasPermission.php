<?php

declare(strict_types=1);

namespace App\Models;

use Hyperf\Database\Model\Model;

class ModelHasPermission extends Model
{
    protected array $fillable = [
        'permission_id',
        'model_type',
        'model_id',
    ];

    protected array $casts = [];
}