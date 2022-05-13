<?php

namespace App\Enums;

enum UserType: string
{
    case Admin = 'admin';
    case Teacher = 'teacher';
    case Staff = 'staff';
    case Student = 'student';

    public function resolveName(): string
    {
        return match ($this) {
            UserType::Admin => "Website Administrator",
            UserType::Teacher => "Teacher",
            UserType::Staff => "Staff",
            UserType::Student => "Student"
        };
    }
}
