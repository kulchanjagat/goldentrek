<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    // Permission Listing Page
    public function index()
    {
        if (Auth::user()->hasRole('superadministrator')) {

            $permissions = Permission::paginate(10);
            //dd($users);

            $params = [
                'title' => 'Permissions Listing',
                'permissions' => $permissions,
            ];

            return view('backend.user_management.permissions.perm_list')->with($params);
        }
        return abort(403,'No such permission, please contact the administrator!');
    }

    // Permission Create Page
    public function create()
    {

        if (Auth::user()->ability('superadministrator','create-acl'))
        {
            $params = [
                'title' => 'Create Permission',
            ];

            return view('backend.user_management.permissions.perm_create')->with($params);
        }
        return abort(403,'No such permission, please contact the administrator!');

    }

    // Permission Store to DB
    public function store(Request $request)
    {

        if (Auth::user()->ability('superadministrator', 'create-acl')) {
            $this->validate($request, [
                'name' => 'required|unique:permissions',
                'display_name' => 'required',
                'description' => 'required',
            ]);

            $permission = Permission::create([
                'name' => $request->input('name'),
                'display_name' => $request->input('display_name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('permission.index')->with('success', "The Permission <strong>$permission->name</strong> has successfully been created.");
        }
        return abort(403,'No such permission, please contact the administrator!');
    }

    // Permission Delete Confirmation Page
    public function show($id)
    {
        //
        try {
            $permission = Permission::findOrFail($id);

            $params = [
                'title' => 'Delete Permission',
                'permission' => $permission,
            ];

            return view('admin.permission.perm_delete')->with($params);
        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.' . '404');
            }
        }
    }

    // Permission Editing Page
    public function edit($id)
    {
        if (Auth::user()->ability('superadministrator', 'update-acl')) {

            try {
                $permission = Permission::findOrFail($id);

                $params = [
                    'title' => 'Edit Permission',
                    'permission' => $permission,
                ];

                //dd($role_permissions);

                return view('backend.user_management.permissions.perm_edit')->with($params);
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }
        return abort(403,'No such permission, please contact the administrator!');
    }

    // Permission update to DB
    public function update(Request $request, $id)
    {
        if (Auth::user()->ability('superadministrator', 'update-acl')) {
            try {
                $permission = Permission::findOrFail($id);

                $this->validate($request, [
                    'display_name' => 'required',
                    'description' => 'required',
                ]);

                $permission->name = $request->input('name');
                $permission->display_name = $request->input('display_name');
                $permission->description = $request->input('description');

                $permission->save();

                return redirect()->route('permission.index')->with('success', "The permission <strong>$permission->name</strong> has successfully been updated.");
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }
        return abort(403,'No such permission, please contact the administrator!');
    }

    // Permission Delete from DB
    public function destroy($id)
    {
        if (Auth::user()->ability('superadministrator', 'update-acl')) {

            try {
                $permission = Permission::findOrFail($id);
                DB::table("permission_role")->where('permission_id', $id)->delete();
                $permission->delete();

                return redirect()->route('permission.index')->with('success', "The Role <strong>$permission->name</strong> has successfully been archived.");
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }
        return abort(403,'No such permission, please contact the administrator!');
    }
}