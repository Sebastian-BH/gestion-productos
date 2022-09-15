<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	
    public $timestamps = true;

    protected $table = 'companies';

    protected $fillable = ['country_id','name','nit','phone','email','status'];
	
}
