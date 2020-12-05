<?php

namespace App\GraphQL\Queries;
use App\Models\Contact;
class GetContacts
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $contacts = Contact::all()->where("publish", true);
        return $contacts;
    }
}
