<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdorableAvatarsController extends Controller {

    protected $sizeOfAvatar = 32;

    public function avatar()
    {
        if (auth()->check())
        {
            $user = auth()->user()->email;

            $avatar = "https://api.adorable.io/avatars/" . $this->sizeOfAvatar . "/" . $user . ".png";

            return $avatar;
        }
    }
}
