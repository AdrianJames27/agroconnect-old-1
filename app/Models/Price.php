<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $primaryKey = 'priceId'; // Specify the primary key field name
    protected $fillable = [
        'productionId',
        'cropName',
        'price',
        'season',
        'monthYear',
    ];

    // Define relationship with Record
    public function record()
    {
        return $this->belongsTo(Production::class, 'productionId', 'productionId');
    }
}
