<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    use HasFactory;

    protected $table = "instances";

    protected $fillable = ["instance","db_host","db_port","db_username","db_password","db_driver","deleted_at","created_at","updated_at"];
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    public function instanceCompanies(){
        return $this->hasMany('App\Models\Company', 'instance_id');
    }
}
