<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $table = 'scholarships';
    protected $guarded = 'id';

    public function student_scholarships() {
        return $this->belongsTo(StudentScholarship::class);
    }
}
