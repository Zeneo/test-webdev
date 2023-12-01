<?php

namespace App\Http\Controllers;

use App\Models\Users;
use http\Env\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $users = Users::select('id', 'first_name', 'last_name', 'email')->get();
        return response()
            ->json($users);
    }

    /**
     * @param null $id
     * @return JsonResponse
     */
    public function single($id = null): JsonResponse
    {
        if($id === null) {
            abort(404);
        }
        $user = Users::find($id);
        if(!$user) {
            abort(404);
        }

        return response()
            ->json($user);
    }

    /**
     * @return string
     */
    public function token(): string
    {
        return csrf_token();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return JsonResponse
     */
    public function create(\Illuminate\Http\Request $request): JsonResponse
    {
        $request->validate([
            'first_name' => 'required|min:3|max:20|alpha',
            'last_name' => 'required|min:3|max:30|alpha',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:30',
            'address' => 'required|regex:/^([a-zA-ZąčęėįšųūžĄČĘĖĮŠŲŪŽ. ])+[0-9]+[a-zA-Z]{0,1}(-([0-9])+)*, (\d{4} ){0,1}([a-zA-ZąčęėįšųūžĄČĘĖĮŠŲŪŽ. ])+(\d{4}){0,1}(, ([a-zA-ZąčęėįšųūžĄČĘĖĮŠŲŪŽ. ])*){0,1}$/'
        ]);

        $user = new Users();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->save();

        return  response()
                ->json(['msg' => 'Successful', 'err_code' => 200]);
    }


    /**
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(\Illuminate\Http\Request $request, int $id): JsonResponse
    {
        $user = Users::find($id);
        if(!$user) {
            return  response()
                ->json(['msg' => 'Failed to find user by given id', 'err_code' => 500]);
        }
        $request->validate([
            'first_name'    => 'required|min:3|max:20|alpha',
            'last_name'     => 'required|min:3|max:30|alpha',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|min:6|max:30',
            'address'       => 'required|regex:/^([a-zA-ZąčęėįšųūžĄČĘĖĮŠŲŪŽ. ])+[0-9]+[a-zA-Z]{0,1}(-([0-9])+)*, (\d{4} ){0,1}([a-zA-ZąčęėįšųūžĄČĘĖĮŠŲŪŽ. ])+(\d{4}){0,1}(, ([a-zA-ZąčęėįšųūžĄČĘĖĮŠŲŪŽ. ])*){0,1}$/'
        ]);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->save();

        return  response()
            ->json(['msg' => 'Successful', 'err_code' => 200]);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        $user = Users::find($id);
        if(!$user) {
            return  response()
                ->json(['msg' => 'Failed to find user by given id', 'err_code' => 500]);
        }

        $user->delete();

        return  response()
            ->json(['msg' => 'Successful', 'err_code' => 200]);
    }
}
