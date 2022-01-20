<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\PermissionRequest;

class PermissionController extends Controller
{
    // Permision list
    public function permission_list(){
        $permissions = Permission::orderBy('id', 'DESC')->get();
        return view('admin.users.permission_list', compact('permissions'));
    }

    // Get all permissions
    public function getPermissionAll(){
        $permissions = Permission::orderBy('id', 'DESC')->get();
        return view('admin.users.user_role', compact('permissions'));
    }

    // Add Permision Page
    public function add_permision_page(){
        return view('admin.users.add_permision_page');
    }

    // Add permision 
    public function add_permission(PermissionRequest $request){
         try{
          
            $permission = new Permission();
            $permission->name = $request->permission;
            $permission->save();
            Toastr::success('İstifadəçi icazəsi uğurla əlavə olundu', 'Uğurlu');
            return redirect()->back();
        }catch(\Exception $e){
            Toastr::error('İstifadəçi icazəsi əlavə olunarkən xəta baş verdi. ' . $e->getMessage());
            return redirect()->back();
        } 
    }

    public function edit_permission($id){
        $editPermissionId = Permission::whereId($id)->first();
        return view('admin.users.edit_permission', compact('editPermissionId'));
    }

    // Update Permission 
    public function update_permission(PermissionRequest $request, $id){
        try{
            $permissionId = Permission::find($id);
            $permissionId->name = $request->permission;
            $permissionId->update();
            Toastr::success('İstifadəçi icazəsi uğurla yeniləndi', 'Uğurlu');
            return redirect()->back();
        }catch(\Exception $e){
            Toastr::error('İstifadəçi icazəsi yenilənərkən xəta baş verdi. ' . $e->getMessage());
            return redirect()->back();
        }
    }

    // Delete Permission
    public function delete_permission(Request $request){
        $permissionId = $request->data;
        $permission = Permission::findOrFail($permissionId);
        $deleted = $permission->delete();

        try{
            return response()->json([
                'status' => 'success',
                'message' => 'İcazəniz uğurla silindi',
            ]);
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'Xəta baş verdi',
            ]);
        }
        
    }
}
