<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\UserCompanies;

class Company extends Model
{
    protected $fillable = ["title", "emp_code_format", "super_admin_id", "logo"];
    public function companyUsers()
    {
        return $this->belongsToMany('App\User', 'companies_users')->withPivot('status',
            'allow_tracking', 'is_deleted', 'bill', 'rate', 'weekly_limit', 'profile_id', 'is_terminated', 'is_employee')
            ->groupBy('users.id');
    }

    public function temp_companyUsers()
    {
        return $this->belongsToMany('App\User', 'companies_users');
    }
}
