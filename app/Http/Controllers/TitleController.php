<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class TitleController extends Controller {

    public $title;
    public $page;

    public function title()
    {
        $uri = Request::path();

        switch ($uri)
        {
            case strpos($uri, "project") == true :
                $this->page = "Projects";
            break;

            case strpos($uri, "about") == true :
                $this->page = "About";
            break;

            case strpos($uri, "contact") == true :
                $this->page = "Contact";
            break;

            case strpos($uri, "login") == true :
                $this->page = "Login";
            break;

            case strpos($uri, "register") == true :
                $this->page = "Register";
            break;

            default :
                $this->page = "Home";
        }

        $this->title = $this->page . " | Ethereal";

        $title = $this->title;

        return $title;
    }
}
