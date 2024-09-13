<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pest extends Model
{
    use HasFactory;

    protected $primaryKey = 'pestId'; // Specify the primary key field name
    protected $fillable = [
        'productionId',
        'barangay',
        'farmerName',
        'cropName',
        'pestName',
        'totalAffected',
        'season',
        'monthYear',
    ];

    // Define relationship with Record
    public function record()
    {
        return $this->belongsTo(Production::class, 'productionId', 'productionId');
    }
}
