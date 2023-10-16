<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{   
    use HasFactory;

    protected $table = 'class_grades';
    protected $guarded = 'id';

    public function classes() {
        return $this->hasMany(Classes::class, 'id');
    }
}
