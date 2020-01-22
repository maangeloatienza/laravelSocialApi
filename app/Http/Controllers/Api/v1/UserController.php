<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\UserResource;
use App\Http\Resources\v1\UserResourceCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;


class UserController extends Controller
{
    public function index():UserResourceCollection{
        return new UserResourceCollection(User::paginate());
    }

    public function show(User $user):UserResource{
        return new UserResource($user);
    }

    public function store(Request $request) {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'username'      => 'required',
            'password'      => 'required'
        ]);

        $request->password = Hash::make($request->password);

        $user = User::create($request->all());

        return new UserResource($user);
    }

    public function update(User $user,Request $request):UserResource {

        $user->update($request->all());

        return new UserResource($user);
    }

    public function destroy(User $user) {

        $user->destroy($user->id);

        return response()->json();
    }
}
