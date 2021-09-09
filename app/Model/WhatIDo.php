<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WhatIDo extends Model
{
    protected $fillable = [
        'topic', 'icon', 'sub_topic', 'details',
    ];
}
