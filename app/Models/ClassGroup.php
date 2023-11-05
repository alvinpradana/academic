<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ClassGroup extends Model
{
    use HasFactory;

    protected $table = 'class_group';
    protected $guarded = 'id';

    public function users(): BelongsTo {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function class(): HasOne {
        return $this->hasOne(Classes::class, 'id');
    }
}
