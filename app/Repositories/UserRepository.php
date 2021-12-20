<?php

namespace App\Repositories;

use App\Repositories\Impl\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $table = "users";

    public function store($request)
    {
        // TODO: Implement store() method.
        DB::table($this->table)->insert([
            'name' => $request->name,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);
    }

    public function update($id, $request)
    {
        // TODO: Implement update() method.
        $data = $request->only("name","email","birthday","address");
         DB::table($this->table)
            ->where('id', $id)
            ->update($data);
         return $data;
    }
    public function search($request)
    {
        // TODO: Implement search() method.
        if ($request->searchUser !== null){
            return DB::table($this->table)->where("name","like",'%'.$request->searchUser.'%')->get();
        }else{
            return DB::table($this->table)->get();
        }
    }
}
