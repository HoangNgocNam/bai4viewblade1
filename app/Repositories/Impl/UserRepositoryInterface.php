<?php

namespace App\Repositories\Impl;

interface UserRepositoryInterface
{
    public function store($request);

    public function update($id, $request);

    public function search($request);
}
