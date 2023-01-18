<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EodCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'eod_categories';
    protected $guarded = [];

    public function eodreport()
    {
        return $this->hasMany(EodReport::class, 'eod_categories_id', 'id');
    }
}
