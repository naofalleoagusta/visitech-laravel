<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',

            //Belongs to many relations
            'roles' => 'Roles',

        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'body' => 'Body',
            'publish' => 'Publish',

        ],
    ],

    'banner' => [
        'title' => 'Banners',

        'actions' => [
            'index' => 'Banners',
            'create' => 'New Banner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'publish' => 'Publish',
            'rank' => 'Rank',

        ],
    ],

    'faq' => [
        'title' => 'Faqs',

        'actions' => [
            'index' => 'Faqs',
            'create' => 'New Faq',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'question' => 'Question',
            'answer' => 'Answer',
            'enabled' => 'Enabled',

        ],
    ],

    'portofolio' => [
        'title' => 'Portofolios',

        'actions' => [
            'index' => 'Portofolios',
            'create' => 'New Portofolio',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'desc' => 'Desc',
            'enable' => 'Enable',

        ],
    ],

    'contact' => [
        'title' => 'Contacts',

        'actions' => [
            'index' => 'Contacts',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'desc' => 'Desc',
            'subject' => 'Subject',
            'publish' => 'Publish',

        ],
    ],

    'achievment' => [
        'title' => 'Archivement',

        'actions' => [
            'index' => 'Archivement',
            'create' => 'New Archivement',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'desc' => 'Desc',
            'enabled' => 'Enabled',

        ],
    ],

    'member' => [
        'title' => 'Members',

        'actions' => [
            'index' => 'Members',
            'create' => 'New Member',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'position' => 'Position',
            'linkedin' => 'Linkedin',
            'publish' => 'Publish',

        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
