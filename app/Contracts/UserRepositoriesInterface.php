<?php

namespace App\Contracts;

interface UserRepositoriesInterface {
    public function getUserData();

    public function createUser($request);

    public function updateUser($id, $name);

    public function deleteUser($id);
}

?>
