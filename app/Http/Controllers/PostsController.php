<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'website_id'  => 'required',
                'title'       => 'required',
                'description' => 'required'
            ]
        );

        return Post::create(
            [
                'website_id'  => $request->post('website_id'),
                'title'       => $request->post('title'),
                'description' => $request->post('description'),
            ]
        );
    }
}
