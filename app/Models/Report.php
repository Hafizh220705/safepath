<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'reference_code',
        'is_anonymous',
        'title',
        'description',
        'address',
        'contact_phone',
        'incident_time',
        'status',
        'severity',
        'latitude',
        'longtitude',
    ];

    public function media()
    {
        return $this->hasMany(ReportMedia::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comment()
    {
        return $this->hasMany(ReportComment::class);
    }

    public function status()
    {
        return $this->hasMany(ReportStatusLog::class);
    }
}
