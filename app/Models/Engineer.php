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
        'comment'

        
    ];

public const ENGINEER_STATUS_MALE = 1;
public const ENGINEER_STATUS_FEMALE = 2;

public const ENGINEER_STATUS_NAME_MALE = '男';
public const ENGINEER_STATUS_NAME_FEMALE = '女';

public const ENGINEER_STATUS_OBJECT = [
    self::ENGINEER_STATUS_MALE => self::ENGINEER_STATUS_NAME_MALE,
    self::ENGINEER_STATUS_FEMALE => self::ENGINEER_STATUS_NAME_FEMALE,
  
];

public const ENGINEER_STATUS_ARRAY = [
    self::ENGINEER_STATUS_MALE,
    self::ENGINEER_STATUS_FEMALE,
];


public const ENGINEER_STATUS_HIGHSCHOOL = 3;
public const ENGINEER_STATUS_VOCATIONAL = 4;
public const ENGINEER_STATUS_UNIV = 5;

public const ENGINEER_STATUS_NAME_HIGHSCHOOL = '高卒';
public const ENGINEER_STATUS_NAME_VOCATIONAL = '専門卒';
public const ENGINEER_STATUS_NAME_UNIV = '大卒';

public const ENGINEER_STATUS_OBJECT_2 = [
    self::ENGINEER_STATUS_HIGHSCHOOL => self::ENGINEER_STATUS_NAME_HIGHSCHOOL,
    self::ENGINEER_STATUS_VOCATIONAL => self::ENGINEER_STATUS_NAME_VOCATIONAL,
    self::ENGINEER_STATUS_UNIV => self::ENGINEER_STATUS_NAME_UNIV,
  
];

public const ENGINEER_STATUS_ARRAY_2 = [
    self::ENGINEER_STATUS_HIGHSCHOOL,
    self::ENGINEER_STATUS_VOCATIONAL,
    self::ENGINEER_STATUS_UNIV,
];

}
