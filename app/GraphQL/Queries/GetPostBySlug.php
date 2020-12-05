<?php

namespace App\GraphQL\Queries;

use App\Models\Post;

class GetPostBySlug
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $slug = $args['slug'];
        $now = new \DateTime();
        $post = Post::where('slug', $slug)->where("publish", true)->first();
        error_log($post);

        if ($post) {
            if (sizeof($post->getMedia("gallery")) > 0) {
                $post->cover_image = $post->getMedia("gallery")[0]->getUrl();
                $post->thumbnail = $post->getMedia("gallery")[0]->getUrl("thumb_200");
            }

        }
        return $post;
    }
}
