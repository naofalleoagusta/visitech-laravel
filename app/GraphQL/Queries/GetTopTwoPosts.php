<?php

namespace App\GraphQL\Queries;
use App\Models\Post;
class GetTopTwoPosts
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $posts = Post::where("publish", true)->take(2)->get();
        foreach ($posts as $post) {
            if (sizeof($post->getMedia("gallery")) > 0) {
                $post->cover_image = $post->getMedia("gallery")[0]->getUrl();
                $post->thumbnail = $post->getMedia("gallery")[0]->getUrl("thumb_200");
            }

        }
        return $posts;
    }
}
