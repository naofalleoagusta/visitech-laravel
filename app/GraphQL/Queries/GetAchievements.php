<?php

namespace App\GraphQL\Queries;

use App\Models\Achievment;

class GetAchievements
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $galleries = Achievment::all()->where("enabled", true);
        foreach ($galleries as $item) {
            if (sizeof($item->getMedia("achievment_media")) > 0) {
                $item->cover_image = $item->getMedia("achievment_media")[0]->getUrl();
                $item->thumbnail = $item->getMedia("achievment_media")[0]->getUrl("thumb_200");
            }
        }

        return $galleries;
    }
}
