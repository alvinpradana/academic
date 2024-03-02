<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentScore extends Model
{
    use HasFactory;

    protected $table = 'student_score';
    protected $guarded = 'id';

    public function scores() {
        return $this->belongsTo(Score::class, 'score_id');
    }

    public function students() {
        return $this->belongsTo(User::class, 'student_id');
    }
}
