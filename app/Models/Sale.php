<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
	
    public $timestamps = true;

    protected $table = 'sales';

    protected $fillable = [
        'user_id',
        'sorteo_id',
        'phone',
        'total',
        'status'
    ];

    // The attributes that should be casted to a Carbon instance.
    protected $dates = [
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
	
}
