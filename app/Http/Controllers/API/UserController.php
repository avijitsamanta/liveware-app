<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

use App\Models\User;

use Validator;

use App\Http\Resources\UserResource;

class UserController extends BaseController
{
       /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

     public function index()

     {
 
         $users = User::all();
 
     
 
         return $this->sendResponse(UserResource::collection($users), 'Users retrieved successfully.');
 
     }

         /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $user = User::find($id);

        if (is_null($user)) {

            return $this->sendError('user not found.');

        }
        return $this->sendResponse(new UserResource($user), 'User retrieved successfully.');

    }
}
