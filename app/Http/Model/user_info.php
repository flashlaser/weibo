<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    public $table = 't_user_info';
    // public $fillable =['user_name','last_login_time','last_login_ip'];
    public $guarded =[];//都可以添加

    public $primaryKey = 'order';
}
