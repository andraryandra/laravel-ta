<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EodReport extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'eod_report';
    protected $guarded = [];

    public function eodfile()
    {
        return $this->hasMany(EodFile::class, 'eod_id', 'id');
    }

    public function eodcategory()
    {
        return $this->belongsTo(EodCategory::class, 'eod_categories_id', 'id');
    }


}
