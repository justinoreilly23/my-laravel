<?php

namespace App;

class Helper {

    public static function flash($message)
    {
        session()->flash('message', $message);
    }
}
