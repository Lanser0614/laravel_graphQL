<?php

namespace App\Models;

use Database\Factories\PivotFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    use HasFactory;

    protected  $table = 'pivot_table_category_post';

    protected static function newFactory(): PivotFactory
    {
        return PivotFactory::new();
    }
}
