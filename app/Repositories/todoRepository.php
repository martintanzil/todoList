<?php

namespace App\Repositories;
Use App\todoModel;

class todoRepository implements todoInterface{

    public function create(string $description, $status){
        $newtodo = new todoModel();
        $newtodo->description = $description;
        $newtodo->status = $status;
        $newtodo->save();
    }

    public function getAll(){        
        return todoModel::all();
    }

    public function getId(int $id){
        return todoModel::find($id);
    }

    public function update(int $id,string $description, $status){
        todoModel::find($id)->update(['description'=>$description , 'status'=>$status]);
    }

    public function delete (int $id){
        todoModel::find($id)->delete();   
    }
}