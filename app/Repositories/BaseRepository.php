<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BaseRepository implements BaseRepositoryInterface
{
    protected $table;

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $data = DB::table($this->table)
            ->select()
            ->get();
        return $data;
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
       $data = DB::table($this->table)->where('id','=', $id)->get()->first();
       return $data;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
     return   DB::table($this->table)->where('id', '=', $id)->delete();
    }
}
