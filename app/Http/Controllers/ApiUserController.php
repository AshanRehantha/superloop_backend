<?php

namespace App\Http\Controllers;

use App\Contracts\UserRepositoriesInterface;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

/**
 * @group  User management
 *
 * APIs for managing users
 */

class ApiUserController extends Controller
{
    protected $userRepositoriesInterface;

    public function __construct(UserRepositoriesInterface $userRepositoriesInterface)
    {
        $this->userRepositoriesInterface = $userRepositoriesInterface;
    }

    public function index()
    {
        return $this->sendResponse(new UserResource($this->userRepositoriesInterface->getUserData()), 'User retrieved successfully.');
    }


    /**
     * @bodyParam  first_name string required User first name. Example: Test User
     * @bodyParam  last_name string required User last name. Example: Test User
     * @bodyParam  age integer required User age. Example: 20
     * @bodyParam  dob date required User data of birth. Example: 1990-16-30
     * @bodyParam  email string required User email. Example: test@nowar.com
     *
     *
     * @response  {
     *  "data" :[
     * {
     *  "id": 1,
     *  "first_name": "Jessica Jones",
     *  "last_name": "Mark",
     *  "age": "25",
     *  "dob": "1990-06-30",
     *  "email": "test@nowar.com",
     * }
     * ]
     * }
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'dob' => 'required',
            'email' => 'required',
        ]);
        return $this->userRepositoriesInterface->createUser($request);
    }

    /**
     * @bodyParam  id integer required User id. Example: 1
     * @bodyParam  name string required User name. Example: Test User
     *
     */
    public function update($id,$name)
    {
       return $this->userRepositoriesInterface->updateUser($id, $name);
    }

    /**
     * @bodyParam  id integer required User id. Example: 1
     */
    public function destroy($id)
    {
        return $this->userRepositoriesInterface->deleteUser($id);
    }
}
