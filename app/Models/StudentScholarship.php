<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentScholarship extends Model
{
    use HasFactory;

    protected $table = 'student_scholarships';
    protected $guarded = 'id';

    public function users() {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function scholarships() {
        return $this->belongsTo(Scholarship::class, 'scholarship_id');
    }
}
