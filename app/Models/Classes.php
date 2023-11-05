<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'class';
    protected $guarded = 'id';
    
    public function class_levels() {
        return $this->belongsTo(LevelClass::class, 'class_level_id');
    }

    public function grades() {
        return $this->belongsTo(Grade::class, 'class_grade_id');
    }

    public function majors() {
        return $this->belongsTo(Major::class, 'class_major_id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function class_group(): BelongsTo {
        return $this->belongsTo(ClassGroup::class, 'class', 'id');
    }
}
