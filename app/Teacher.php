<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $attributes = [
        'first_name' => '',
        'last_name' => '',
        'job_id'=>'',
        'salary'=>0,
    ];
}
