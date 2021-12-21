<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BaseRepository implements BaseRepositoryInterface
{
    protected $table;
    protected $model;


    public function getAll()
    {
        // TODO: Implement getAll() method.
//        $data = DB::table($this->table)
//            ->select()
//            ->get();
//        return $data;

        return $this->model->All();
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
       $data = $this->model->where('id','=', $id)->firstOrFail();
       return $data;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
     $post = $this->model::findOrfail($id);
     $post->delete();
    }
}
