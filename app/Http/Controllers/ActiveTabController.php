<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class ActiveTabController extends Controller {

    public $activeTab;

    public function activeTab()
    {
        $uri = Request::path();

        switch ($uri)
        {
            case strpos($uri, "project") !== false :
                $this->activeTab = "projects";
            break;

            case strpos($uri, "about") !== false :
                $this->activeTab = "about";
            break;

            case strpos($uri, "contact") !== false :
                $this->activeTab = "contact";
            break;

            case strpos($uri, "login") !== false :
                $this->activeTab = "login";
            break;

            case strpos($uri, "register") !== false :
                $this->activeTab = "register";
            break;

            default :
                $this->activeTab = "home";
        }

        return $this->activeTab;
    }
}
