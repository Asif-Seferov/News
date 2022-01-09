<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Role;

class RoleController extends Controller
{
    // User role page
    public function user_role(){
        $userRoles = Role::all();
        return view('admin.users.user_role', compact('userRoles'));
    }

    public function user_role_add_page(){
        return view('admin.users.user_role_add');
    }
    // Add user role
    public function user_role_add(Request $request){
        
            //validation user role form
            $request->validate([
                'user_role'=>'required | min:3',
            ]);

            $userRole = new Role();
            $userRole->rol_name = $request->user_role;
            $userRole->save();
            Toastr::success('İstifadəçi rolu uğurla əlavə olundu', 'Uğurlu');
            return redirect()->back();
    }
    // edit user role
    public function edit_user_role($id){
        $editRole = Role::find($id) ?? abort(404, 'Belə bir istifadəçi rolu mövcud deyil');
        return view('admin.users.edit_user_role', compact('editRole'));
    }
    //update user role
    public function update_user_role(Request $request, $id){
            $request->validate([
                'user_role'=>'required | min:3',
            ]);
        try{
            $updateRole = Role::find($id);
            $updateRole->rol_name = $request->user_role;
            $updateRole->update();
            Toastr::success('İstifadəçi rolu uğurla yeniləndi', 'Uğurlu');
            return redirect()->back();
        }catch(\Exception $e){
            Toastr::error('İstifadəçi yenilənərkən xəta baş verdi');
            return redirect()->back();
        }
    }
    // delete user role
    public function delete_user_role(Request $request){
        try{
            $deleteRoleId = $request->data;
            $deleteRole = Role::findOrFail($deleteRoleId);
            $deleteRole->delete();

            return response()->json([
                'status'=>'success',
                'message'=>'İstifadəçi rolu uğurla silindi',
            ]);
        }catch(\Exception $e){
                return response()->json([
                    'status'=>'error',
                    'message'=>'İstifadəçi rolu silinərkən xəta baş verdi',
                ]);
        }
    }
    
}
