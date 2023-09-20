<?php

namespace App\Http\Integrations\Posts;

use Saloon\Http\Connector;

class PostsConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://jsonplaceholder.typicode.com/posts';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];
    }
}
