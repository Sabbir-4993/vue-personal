<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    protected $fillable = [
        'name', 'email_pre', 'email_alt', 'phone_pre', 'phone_alt', 'birth', 'address', 'career_objective',
    ];
}
