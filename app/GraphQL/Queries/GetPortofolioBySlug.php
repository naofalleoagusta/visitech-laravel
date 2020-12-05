<?php

namespace App\GraphQL\Queries;

use App\Models\Portofolio;

class GetPortofolioBySlug
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $slug = $args['slug'];
        $product = Portofolio::where('slug', $slug)->first();
        if (sizeof($product->getMedia("portofolio_media")) > 0) {
            $product->cover_image = $product->getMedia("portofolio_media")[0]->getUrl();
            $product->thumbnail = $product->getMedia("portofolio_media")[0]->getUrl("thumb_200");
        }
        return $product;
    }
}
