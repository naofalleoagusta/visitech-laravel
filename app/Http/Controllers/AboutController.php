<?php

namespace App\Http\Controllers;
use App\Models\Member;

class AboutController extends Controller
{
    public function index()
    {
        $about=config('visitech.about');
        $bg_2=config('visitech.bg_2');
        $members = Member::where('publish', true)->get();
        return view('about', [
            'bg_2'=>$bg_2,
            'about'=>$about,
            'members'=>$members
        ]);
    }
}
