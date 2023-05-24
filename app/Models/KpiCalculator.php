<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KpiCalculator extends Model
{
    use HasFactory;
    protected $table = 'kpi_calculators';
    protected $fillable = [
        'user_id',
        'project_id',
        'data',
    ];
}
