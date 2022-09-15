<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable, SoftDeletes, HasRolesAndAbilities;

    public $timestamps = true;

    protected $table = 'users';

    protected $fillable = ['company_id','document','name','lastname','phone','addres','email','username','role_id','login','status'];
	
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    */
    protected $hidden = [
        'password', 
        'token',
    ];
    
    // The attributes that should be casted to a Carbon instance.
    protected $dates = [
        'created_at', 
        'updated_at', 
        'deleted_at',
    ];
    
    
    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc()
    {
        return 'Administrador';
    }

    public function adminlte_profile_url()
    {
        return 'profile/username';
    }
}
