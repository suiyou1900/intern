<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'first_name_furigana',
        'last_name_furigana',
        'gender',
        'birthday',
        'email',
        'phonenumber',
        'postalcode',
        'prefecture',
        'address',
        'station',
        'background',
        'resume',
        'job_history_sheet',
        
    ];

}
