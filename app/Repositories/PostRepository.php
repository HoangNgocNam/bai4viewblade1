<?php

namespace App\Repositories;

use App\Models\post;
use App\Repositories\Impl\PostRepositoryInterface;
use phpDocumentor\Reflection\Types\This;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    protected $table = "posts";

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function store($request)
    {
        // TODO: Implement store() method.
        $posts = new $this->model;
        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->post_time = $request->post_time;
        $posts->save();

    }

    public function update($id, $request)
    {
        // TODO: Implement update() method.

        $post = $this->model::find($request->id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->post_time = $request->post_time;
        $post->save();
    }
}
