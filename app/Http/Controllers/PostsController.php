<?php

namespace App\Http\Controllers;

use App\Http\Integrations\Posts\Requests\AllPostsRequest;
use Illuminate\Http\Request;
use App\Http\Integrations\Posts\PostsConnector;
use App\Http\Integrations\Posts\Requests\SinglePostRequest;

class PostsController extends Controller
{
    public PostsConnector $connector;

    public function __construct()
    {
        $this->connector = new PostsConnector;
    }

    public function index()
    {
        $response = $this->connector->send(new AllPostsRequest);

        return $response->json();
    }

    public function show(int $postId)
    {
        $response = $this->connector->send(new SinglePostRequest($postId));

        return $response->json();
    }
}
