<?php

namespace App\Repositories;

use App\todoModel;

class todoRepository implements todoInterface
{

    public function create(string $description, $status)
    {
        $newtodo = new todoModel();
        $newtodo->description = $description;
        $newtodo->status = $status;
        $newtodo->save();
    }

    public function getAll()
    {
        return todoModel::all();
    }

    public function getId(int $id)
    {
        return todoModel::find($id);
    }

    public function update(int $id, string $description, $status)
    {
        $this->getId($id)->update(['description' => $description, 'status' => $status]);
    }

    public function delete(int $id)
    {
        $this->getId($id)->delete();
    }

    public function getFinished()
    {
        return $this->getAll()->where('status', 1);
    }
}