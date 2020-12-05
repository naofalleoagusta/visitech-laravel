<?php

namespace App\GraphQL\Queries;

use App\Models\Post;

class GetPosts
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        // TODO implement the resolver
        $allPosts = Post::where("publish", true)->get();
        $posts = Post::where("publish", true)->offset(($args['page'] - 1) * $args['limit'])->limit($args['limit'])->get();
        foreach ($posts as $post) {
            if (sizeof($post->getMedia("gallery")) > 0) {
                $post->cover_image = $post->getMedia("gallery")[0]->getUrl();
                $post->thumbnail = $post->getMedia("gallery")[0]->getUrl("thumb_200");
            }

        }
        $length = sizeof($allPosts);
        $data = new \stdClass();
        $data->length = $length;
        if ($args['limit'] >= 5000) {
            $data->data = $allPosts;
        } else {
            $data->data = $posts;
        }

        return $data;
    }
}
