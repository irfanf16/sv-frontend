<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'password', 'app_password','allow_tracking','rate', 'bill', 'image', 'weekly_limit', 'remember_token', 'theme_color', 'client_app_version'
    ];
    protected $appends = ['cost'];
    public $project_id;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function scopeExclude($query, $value = array())
    {
        return $query->select(array_diff($this->columns, (array)$value));
    }

    // protected $hidden = ['password', 'image'];
    // protected $hidden = ['password'];

    public function usercompanies()
    {
        return $this->belongsToMany('App\Models\Company', 'companies_users')->withPivot('status', 'profile_id');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getCostAttribute($cost = 0) {
        return $cost;
    }
}


