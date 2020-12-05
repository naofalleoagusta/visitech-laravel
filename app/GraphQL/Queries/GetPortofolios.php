<?php

namespace App\GraphQL\Queries;

use App\Models\Portofolio;

class GetPortofolios
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        $products = Portofolio::all()->where("enable", true);
        foreach ($products as $item) {
            if (sizeof($item->getMedia("portofolio_media")) > 0) {
                $item->cover_image = $item->getMedia("portofolio_media")[0]->getUrl();
                $item->thumbnail = $item->getMedia("portofolio_media")[0]->getUrl("thumb_200");
            }
        }
        return $products;
    }
}
