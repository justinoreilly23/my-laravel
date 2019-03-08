<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller {

    public $theme;
    public $themes
        = [
            "royal",
            "pizelex",
            "frozen",
            "",
        ];


    public function theme()
    {
        $i = array_rand($this->themes);

        $final = $this->themes[$i];

//        return $final;
    }
}
