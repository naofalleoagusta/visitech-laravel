<?php

namespace App\GraphQL\Queries;

use App\Models\Banner;

class GetBanners
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $banners = Banner::orderBy("rank", "desc")->where('publish', true)->get();
        foreach ($banners as $banner) {
            if (sizeof($banner->getMedia("banner_media")) > 0) {
                $banner->cover_image = $banner->getMedia("banner_media")[0]->getUrl();
                $banner->thumbnail = $banner->getMedia("banner_media")[0]->getUrl("thumb_200");
            }


        }
        return $banners;
    }
}
