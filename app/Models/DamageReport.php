<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamageReport extends Model
{
    use HasFactory;

    protected $primaryKey = 'damageId';
    protected $fillable = [
        'prodcutionId',
        'barangay',
        'cropName',
        'variety',
        'numberOfFarmers',
        'areaAffected',
        'yieldLoss',
        'season',
        'monthYear',
    ];

    // Define relationship with Record
    public function record()
    {
        return $this->belongsTo(Production::class, 'prodcutionId', 'prodcutionId');
    }
}
