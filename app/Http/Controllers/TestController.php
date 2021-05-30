<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TestController extends Controller
{
    public function index()
    {
        $role = Role::create(['name' => 'writer']);
        $permission = Permission::create(['name' => 'edit articles']);
        
        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        return 'Success Create Role and Permission';
    }

    public function showRole()
    {
        return Role::all();
    }

    public function showPermission()
    {
        return Permission::all();
    }

    public function storeUerPermission()
    {
        return view('home');
    }

    public function Test213()
    {
        return "測試 git rebase";
    }
}
