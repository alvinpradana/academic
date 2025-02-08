<?php

namespace App\Http\Controllers;

use App\Models\StudentComplement;
use App\Models\TeacherComplement;
use App\Models\User;
use App\Models\UserComplement;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function store($user) {
        $exist_password = '';
        $user_data = User::where('id', $user)->first();

        if ($user_data->position_id == 1) {
            $teacher_password = TeacherComplement::where('user_id', $user)->pluck('nip_number')->first();
            $exist_password = $teacher_password;
        } else if ($user_data->position_id == 2) {
            $student_password = StudentComplement::where('user_id', $user)->pluck('nip_number')->first();
            $exist_password = $student_password;
        } else {
            $exist_password = 'passwordadmin';
        }

        User::where('id', $user)->update([
            'password' => bcrypt($exist_password)
        ]);

        return redirect()->back()->with('success', 'User password has been successfully reset.');
    }
}
