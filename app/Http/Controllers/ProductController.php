<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function visi_powerwall_index()
    {
        $product = config('visitech.visi_powerwall');
        $banner_smart_socket=config('visitech.visi_smart_socket.img.banner');
        return view('product', [
            "product" => $product,
            "other_banner"=>$banner_smart_socket,
            "other_product"=>[
                "slogan"=>"Smart Home",
                "name"=>"Visi Smart Socket",
                "desc"=>"Allows you the flexibility to remotely control and monitor electronic devices, anytime, anywhere.",
                "url"=>"/visi-smart-socket"
            ]
        ]);
    }

    public function visi_smart_socket_index()
    {
        $product = config('visitech.visi_smart_socket');
        $banner_powerwall=config('visitech.visi_powerwall.img.banner');
        return view('product', [
            "product" => $product,
            "other_banner"=>$banner_powerwall,
            "other_product"=>[
                "slogan"=>"Clean Energy",
                "name"=>"Visi Power Box",
                "desc"=>"Unleash the potential of renewable energy and experience living more sustainably.",
                "url"=>"/visi-powerwall"
            ]
        ]);
    }
}
