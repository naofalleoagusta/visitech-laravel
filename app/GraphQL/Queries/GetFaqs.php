<?php

namespace App\GraphQL\Queries;

use App\Models\Faq;

class GetFaqs
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $faqs = Faq::all()->where("enabled", true);
        return $faqs;
    }
}
