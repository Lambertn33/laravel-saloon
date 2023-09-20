<?php

namespace App\Http\Integrations\Posts\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class SinglePostRequest extends Request
{

    protected int $postId;

    public function __construct(int $postId)
    {
        $this->postId = $postId;
    }


    /**
     * Define the HTTP method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    /**
     * Define the endpoint for the request
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/' . $this->postId . '';
    }
}
