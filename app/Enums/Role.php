<?php

namespace App\Enums;

enum Role: string
{
    case SuperAdmin = 'super_admin';
    case Admin = 'admin';
    case User = 'user';

    public function isAdmin(): bool
    {
        return $this === self::SuperAdmin || $this === self::Admin;
    }

    public function isSuperAdmin(): bool
    {
        return $this === self::SuperAdmin;
    }
}

