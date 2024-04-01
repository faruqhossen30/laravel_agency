<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest()->paginate(10);
        // return  $roles;
        return view('admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        // return $roles;
        $permissions = Permission::all()->groupBy('module_name');
        // return $permissions;
        return view('admin.role.create', compact('roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate(
            ['name' => 'required', 'permission_ids']
        );
        $createdRole = Role::create(['name' => $request->name]);
        $permissions = array_map('intval', $request->permission_ids);
        $createdRole->syncPermissions($permissions);


        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $role = Role::where('id', $id)->first();
        $roles = Role::all();
        $permissions = Permission::all()->groupBy('module_name');
        $rolePermissions = $role->permissions()->pluck('id')->toArray();

        // return  $rolePermissions;
        return view('admin.role.edit',compact('role','roles','permissions','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update(['name' => $request->validated('name')]);
        $role->syncPermissions( array_map('intval', $request->validated('permission_ids')));
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('role.index');
    }
}
