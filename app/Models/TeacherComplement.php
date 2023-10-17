<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherComplement extends Model
{
    use HasFactory;

    protected $table = 'teacher_complements';
    protected $guarded = 'id';

    public function users() {
        return $this->belongsTo(User::class, 'teacher_complements', 'user_id');
    }
}
