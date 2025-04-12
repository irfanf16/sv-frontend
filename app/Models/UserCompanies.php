<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserCompanies extends Model
{
    protected $table = "companies_users";
    protected $fillable = ["user_id", "company_id", "profile_id", "status","is_deleted", "allow_tracking","is_terminated","status_comments", "is_employee"];

    public function company()
    {
        $this->hasOne('App\Model\Company', 'company_id');
    }

    public static function no_of_users($company_id = null)
    {
        return UserCompanies::where('company_id', $company_id == null ? session('company_id') : $company_id)->count();
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
