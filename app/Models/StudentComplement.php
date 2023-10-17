<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentComplement extends Model
{
    use HasFactory;

    protected $table = 'student_complements';
    protected $guarded = 'id';

    public function users() {
        return $this->belongsTo(User::class, 'student_complements', 'user_id');
    }
}
