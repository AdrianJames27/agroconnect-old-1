<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;

    protected $primaryKey = 'productionId'; // Specify the primary key field name
    protected $fillable = [
        'recordId',
        'barangay',
        'farmerName',
        'cropName',
        'variety',
        'areaPlanted',
        'monthPlanted',
        'monthHarvested',
        'volumeProduction',
        'productionCost',
        'price',
        'volumeSold',
        'season',
        'monthYear'
    ];

    // Define relationship with Record
    public function record()
    {
        return $this->belongsTo(Record::class, 'recordId');
    }
}
