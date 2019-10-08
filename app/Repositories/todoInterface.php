<?php

namespace App\Repositories;
use App\todoModel;

interface todoInterface {
    public function create(string $description, $status);
    public function getAll();
    public function getId(int $id);
    public function update(int $id,string $description, $status);
    public function delete(int $id);
}