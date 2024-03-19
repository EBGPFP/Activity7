<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DidacticMaterial extends Model
{
    protected $fillable = ['course_key', 'description'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}