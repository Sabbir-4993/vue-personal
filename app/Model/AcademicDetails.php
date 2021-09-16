<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AcademicDetails extends Model
{
    protected $fillable = [
        'edu_name_title', 'institute_name', 'subject', 'passing', 'result', 'duration', 'details',
    ];
}
