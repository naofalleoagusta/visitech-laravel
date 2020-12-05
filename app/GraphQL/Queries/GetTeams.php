<?php

namespace App\GraphQL\Queries;

use App\Models\Member;

class GetTeams
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $testimonies = Member::all()->where('publish', true);
        foreach ($testimonies as $banner) {
            if (sizeof($banner->getMedia("member_media")) > 0) {
                $banner->cover_image = $banner->getMedia("member_media")[0]->getUrl();
                $banner->thumbnail = $banner->getMedia("member_media")[0]->getUrl("thumb_200");
            }


        }
        return $testimonies;

    }
}
