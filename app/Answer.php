<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }


    // This will show how many people have choosen this particle response
    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
