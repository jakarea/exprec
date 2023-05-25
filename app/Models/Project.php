<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'user_id',
        'name',
        'details'
    ];

    public function kpis()
    {
        return $this->hasMany(KpiCalculator::class, 'project_id', 'id');
    }
}
