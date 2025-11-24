<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportMedia extends Model
{
    protected $fillable = [
        'report_id',
        'file_path',
        'type',
        'caption',
    ];

    public function reports()
    {
        return $this->belongsTo(Report::class);
    }
}
