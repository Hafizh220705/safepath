<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ReportMedia extends Model
{
    protected $fillable = [
        'report_id',
        'file_path',
        'type',
        'caption',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}