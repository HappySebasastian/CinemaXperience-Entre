<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users(){
        return $this->belongsToMany(User::class)->withPivot('score')->withTimestamps();
    }

    public function media(){
        return $this->belongsTo(Media::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }

}
