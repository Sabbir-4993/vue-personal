<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JobExperience extends Model
{
    protected $fillable = [
        'company_name', 'designation', 'job_duration', 'job_description',
    ];
}
