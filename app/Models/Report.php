<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "reports";

    use HasFactory;

    protected $fillable = [
        'date', 'month', 'start', 'end', 'duration', 'client', 'course', 'serviceType','class', 'obs', 'status', 'color'
    ];

    protected $guarded = [];
}
