<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_key', 'title', 'content', 'robotics_kit_id'];

    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_course');
    }

    public function didacticMaterials()
    {
        return $this->hasMany(DidacticMaterial::class);
    }
}