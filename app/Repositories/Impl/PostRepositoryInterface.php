<?php

namespace App\Repositories\Impl;

interface PostRepositoryInterface
{
    public function store($request);

    public function update($id, $request);
}
