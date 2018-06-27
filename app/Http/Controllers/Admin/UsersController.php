<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //

    public function __construct()
    {
        //$this->middleware('role:users');
    }

    // Index Page for Users
    public function index()
    {
        $users = User::paginate(10);

        $params = [
            'title' => 'Users Listing',
            'users' => $users,
        ];

        return view('backend.user_management.users.users_list')->with($params);
    }

    // Create User Page
    public function create()
    {

        if (Auth::user()->ability('superadministrator','create-users')) {
//            $users = User::whereRoleIs('superadministrator')->get();
//            $users = Auth::user()->can('create-users');
//            (['administrator'],['create-users'],[''],true);
//            dd($users);
            $roles = Role::all();

            $params = [
                'title' => 'Create User',
                'roles' => $roles,
            ];

            return view('backend.user_management.users.users_create')->with($params);
        }
         return abort(403,'No such permission, please contact the administrator!');

    }

    // Store New User
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        if (Auth::user()->ability('superadministrator','create-users')) {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            $role = Role::find($request->input('role_id'));

            $user->attachRole($role);

            return redirect()->route('users.index')->with('success', "The user $user->name has successfully been created.");

        }
        return abort(403,'No such permission, please contact the administrator!');

           }

    // Delete Confirmation Page
//    public function show($id)
//    {
//        try {
//            $user = User::findOrFail($id);
//
//            $params = [
//                'title' => 'Confirm Delete Record',
//                'user' => $user,
//            ];
//
//            return view('backend.user_management.users.users_show')->with($params);
//        } catch (ModelNotFoundException $ex) {
//            if ($ex instanceof ModelNotFoundException) {
//                return response()->view('errors.' . '404');
//            }
//        }
//    }

    // Editing User Information Page
    public function edit($id)
    {
        if (Auth::user()->ability('superadministrator','update-users')) {

            try {
                $user = User::findOrFail($id);

                //$roles = Role::all();
                $roles = Role::with('permissions')->get();
                $permissions = Permission::all();

                $params = [
                    'title' => 'Edit User',
                    'user' => $user,
                    'roles' => $roles,
                    'permissions' => $permissions,
                ];

                return view('backend.user_management.users.users_edit')->with($params);
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }
        return abort(403,'No such permission, please contact the administrator!');

    }

    // Update User Information to DB
    public function update(Request $request, $id)
    {
        if (Auth::user()->ability('superadministrator','update-users')) {
            try {
                $user = User::findOrFail($id);

                $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,' . $id,
                ]);

                $user->name = $request->input('name');
                $user->email = $request->input('email');

                $user->save();

                // Update role of the user
                $roles = $user->roles;

                foreach ($roles as $key => $value) {
                    $user->detachRole($value);
                }

                $role = Role::find($request->input('role_id'));

                $user->attachRole($role);

                // Update permission of the user
                //$permission = Permission::find($request->input('permission_id'));
                //$user->attachPermission($permission);

                return redirect()->route('users.index')->with('success', "The user $user->name has successfully been updated.");
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }
        return abort(403,'No such permission, please contact the administrator!');
    }

    // Remove User from DB with detaching Role
    public function destroy($id)
    {
        if (Auth::user()->ability('superadministrator','delete-users')) {
            try {
                $user = User::findOrFail($id);

                // Detach from Role
                $roles = $user->roles;

                foreach ($roles as $key => $value) {
                    $user->detachRole($value);
                }

                $user->delete();

                return redirect()->route('users.index')->withSuccess('success', "The user $user->name has successfully been archived.");
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }

        return abort(403,'No such permission, please contact the administrator!');
    }
}