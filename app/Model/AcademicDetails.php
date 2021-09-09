<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AcademicDetails extends Model
{
    protected $fillable = [
        'education_name', 'degree_title', 'institute_name', 'subject', 'passing', 'result', 'duration',
    ];
}
