<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\DB;
use Auth;
class RolesController extends Controller
{
    // Roles Listing Page
    public function index()
    {
        //
        $roles = Role::paginate(10);

        $params = [
            'title' => 'Roles Listing',
            'roles' => $roles,
        ];

        return view('backend.user_management.roles.roles_list')->with($params);
    }

    // Roles Creation Page
    public function create()
    {
//        if (Auth::user()->hasRole('superadministrator') OR Auth::user()->can('create-acl'))
        if (Auth::user()->ability('superadministrator','create-acl'))
        {

            //
            $permissions = Permission::all();

            $params = [
                'title' => 'Create Roles',
                'permissions' => $permissions,
            ];

            return view('backend.user_management.roles.roles_create')->with($params);
        }

        return abort(403,'No such permission, please contact the administrator!');

    }

    // Roles Store to DB
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:roles',
            'display_name' => 'required',
            'description' => 'required',
        ]);

        if (Auth::user()->ability('superadministrator', 'create-acl')) {
            $role = Role::create([
                'name' => $request->input('name'),
                'display_name' => $request->input('display_name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('roles.index')->with('success', "The role $role->name has successfully been created.");
        }
        return abort(403,'No such permission, please contact the administrator!');

    }

    // Roles Delete Confirmation Page
    public function show($id)
    {
        //
        try {
            $role = Role::findOrFail($id);

            $params = [
                'title' => 'Delete Role',
                'role' => $role,
            ];

            return view('backend.user_management.roles.roles_delete')->with($params);
        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.' . '404');
            }
        }
    }

    // Roles Editing Page
    public function edit($id)
    {
        if (Auth::user()->ability('superadministrator','update-acl')) {
            try {
                $role = Role::findOrFail($id);
                $permissions = Permission::all();
                $role_permissions = $role->permissions()->get()->pluck('id')->toArray();

                $params = [
                    'title' => 'Edit Role',
                    'role' => $role,
                    'permissions' => $permissions,
                    'role_permissions' => $role_permissions,
                ];

                return view('backend.user_management.roles.roles_edit')->with($params);
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }
        return abort(403,'No such permission, please contact the administrator!');

    }

    // Roles Update to DB
    public function update(Request $request, $id)
    {
        if (Auth::user()->ability('superadministrator', 'update-acl')) {
            try {
                $role = Role::findOrFail($id);

                $this->validate($request, [
                    'display_name' => 'required',
                    'description' => 'required',
                ]);

                $role->name = $request->input('name');
                $role->display_name = $request->input('display_name');
                $role->description = $request->input('description');

                $role->save();

                DB::table("permission_role")->where("permission_role.role_id", $id)->delete();
                // Attach permission to role
                foreach ($request->input('permission_id') as $key => $value) {
                    $role->attachPermission($value);
                }

                return redirect()->route('roles.index')->with('success', "The role <strong>$role->name</strong> has successfully been updated.");
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }
        return abort(403,'No such permission, please contact the administrator!');
    }

    // Delete Roles from DB
    public function destroy($id)
    {
        if (Auth::user()->ability('superadministrator','delete-acl')) {
            try {
                $role = Role::findOrFail($id);

                //$role->delete();

                // Force Delete
                $role->users()->sync([]); // Delete relationship data
                $role->permissions()->sync([]); // Delete relationship data

                $role->forceDelete(); // Now force delete will work regardless of whether the pivot table has cascading delete

                return redirect()->route('roles.index')->with('success', "The Role $role->name has successfully been archived.");
            } catch (ModelNotFoundException $ex) {
                if ($ex instanceof ModelNotFoundException) {
                    return response()->view('errors.' . '404');
                }
            }
        }
        return abort(403,'No such permission, please contact the administrator!');
    }
}