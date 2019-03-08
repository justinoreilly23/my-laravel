<?php

namespace App\Helpers;

use App\User;

class Avatar {

    public static function avatar(User $user, int $size)
    {
        $avatar = "https://api.adorable.io/avatars/" . $size . "/" . $user->username . ".png";

        return $avatar;
    }
}