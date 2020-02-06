<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entity extends Model
{
    use SoftDeletes;

    protected $table = 'entities';
    protected $fillable = ['name', 
    'social_denomination',
    'nif',
    'type_company',
    'access_application',
    'logo',
    'active',
    'created_by',
    'updated_by',
    'deleted_by'];

}
