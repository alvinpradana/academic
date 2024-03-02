<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $table = 'scores';
    protected $guarded = 'id';

    public function class_group() {
        return $this->belongsTo(ClassGroup::class, 'class_id');
    }
    
    public function lesson() {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }

    public function student_scores() {
        return $this->hasMany(StudentScore::class);
    }
}
