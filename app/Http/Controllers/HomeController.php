<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bg_1 = config('visitech.bg_1');
        $icon_pwrbox = config('visitech.pwrbox');
        $icon_sckt = config('visitech.sckt');
        $pwrwall = config('visitech.pwrwall');
        $smartsckt = config('visitech.smartsckt');
        $bg_2=config('visitech.bg_2');
        return view('home', [
            'bg_1' => $bg_1,
            'icon_pwrbox' => $icon_pwrbox,
            'icon_sckt'=>$icon_sckt,
            'pwrwall'=>$pwrwall,
            'smartsckt'=>$smartsckt,
            'bg_2'=>$bg_2
        ]);
    }
}
