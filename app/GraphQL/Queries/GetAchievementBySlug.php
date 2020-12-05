<?php

namespace App\GraphQL\Queries;

use App\Models\Achievment;

class GetAchievementBySlug
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        $gallery = Achievment::where("slug", $args['slug'])->where('enabled', true)->first();
        if (sizeof($gallery->getMedia("gallery_media")) > 0) {
            $gallery->cover_image = $gallery->getMedia("achievment_media")[0]->getUrl();
            $gallery->thumbnail = $gallery->getMedia("achievment_media")[0]->getUrl("thumb_200");
        }
        return $gallery;
    }
}
