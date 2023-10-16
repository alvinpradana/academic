<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelClass extends Model
{
    use HasFactory;

    protected $table = 'class_levels';
    protected $guarded = 'id';

    public function classes() {
        return $this->hasMany(Classes::class, 'id');
    }
}
