<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WorkDetails extends Model
{
    protected $fillable = [
        'company_name', 'designation', 'from_to', 'description',
    ];
}
