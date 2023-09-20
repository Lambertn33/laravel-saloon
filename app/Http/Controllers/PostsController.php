<?php

namespace App\Http\Controllers;

use App\Http\Integrations\Posts\Requests\AllPostsRequest;
use Illuminate\Http\Request;
use App\Http\Integrations\Posts\PostsConnector;

class PostsController extends Controller
{
    public function index()
    {
        $connector = new PostsConnector;
        $response = $connector->send(new AllPostsRequest);

        return $response->json();
    }
}
