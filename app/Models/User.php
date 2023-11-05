<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function user_complements() {
        return $this->hasOne(UserComplement::class);
    }

    public function teacher_complements()  {
        return $this->hasOne(TeacherComplement::class);
    }

    public function student_complements() {
        return $this->hasOne(StudentComplement::class);
    }

    public function positions() {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function classes() {
        return $this->belongsTo(Classes::class, 'teacher_id');
    }

    public function class_group(): HasOne {
        return $this->hasOne(ClassGroup::class, 'class', 'id');
    }
}
