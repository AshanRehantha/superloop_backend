<?php

namespace App\Repository;

use App\Contracts\UserRepositoriesInterface;
use App\Http\Controllers\Controller;
use App\UserInfo;
use Illuminate\Support\Facades\Hash;

class UserRepositories extends Controller  implements UserRepositoriesInterface {

    public function getUserData(){
        return UserInfo::all();
    }

    public function createUser($request){
        UserInfo::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'dob' => $request->dob,
            'email' => $request->email,
        ]);

        return $this->sendResponse('User created successfully.', 'User created successfully.');

    }

    public function updateUser($id, $name){
        UserInfo::where('id', $id)->update([
            'first_name' => $name
        ]);

        return $this->sendResponse('User update successfully.', 'User update successfully.');
    }

    public function deleteUser($id){
        UserInfo::where('id', $id)->delete();
        return $this->sendResponse('User update successfully.', 'User delete successfully.');
    }

}

?>
