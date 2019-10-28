<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz';

    protected $guarded = [];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
