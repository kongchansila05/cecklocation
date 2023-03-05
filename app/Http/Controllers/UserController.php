<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\User;
use App\Models\Has_roles;
use App\Models\Roles;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
class UserController extends Controller
{
    use RegistersUsers;
    
    public function user()
    {
        $uid =  Auth::User()->id;
           $Auth = User::select('users.*','model_has_roles.model_id as model_id','roles.name as role_name','roles.id as role_id')
                ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
                ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
                ->where('users.id','=',$uid )->get();
        if($Auth[0]->role_id == 1){
            $role = Roles::all();
            $user = User::select('users.*','model_has_roles.model_id as model_id','roles.name as role_name','roles.id as role_id')
                ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
                ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
                ->latest()
                ->get();
            return view('admin/user/user', compact('user','role'));
        }
        if($Auth[0]->role_id == 2){
            $user = User::select('users.*','model_has_roles.model_id as model_id','roles.name as role_name','roles.id as role_id')
                ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
                ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
                ->latest()
                ->where('roles.id','!=','1' )
                ->get();
            $role = Roles::where('id','!=','1')->get();
            return view('admin/user/user', compact('user','role'));
        }
        else{
            $user = User::select('users.*','model_has_roles.model_id as model_id','roles.name as role_name','roles.id as role_id')
                ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
                ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
                ->latest()
                ->where('users.id','=',$uid )
                ->get();
            $role = Roles::where('id','=',$user[0]->role_id)->get();
            return view('admin/user/user', compact('user','role'));
        }
    }
    public function user_create(Request $request)
    {
        $role = DB::table('roles')->where('id', $request->group_id)->get();
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'email_verified_at'   => date('Y-m-d H:i:s'),
            'password' => Hash::make($request->password),
        ])->assignRole($role[0]->name);
        Alert::success('Create User Successful');
        return redirect('/user');
    }
    public function user_update(Request $request, User $user)
    {
        $id = $request->id;
        $user = User::whereId($id)->first();
        $model_id = $user->id;
        DB::table('model_has_roles')->where('model_id', $model_id)
        ->update([
            'role_id'=>$request->group_id,
        ]);
        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ];
        $user->update($data);
        Alert::success('Successful', 'User is Edited');
        return redirect('/user');
    }

    public function user_question($id){
        alert()->question('Delete User !', 'Are you sure?')
        ->showConfirmButton('<a href="/user/' . $id . '/destroy" class="text-white" style="text-decoration: none">Yes I&apos;m sure</a>', '#3085d6')->toHtml()
        ->showCancelButton('Back', '#aaa')->reverseButtons();
        return redirect('/user');
    }

    public function user_destroy(User $user ,$id)
    {
        $user = User::select('id')->whereId($id)->firstOrFail();
        $user->delete();
        Alert::success('Successful', 'User is Deleted');
        return redirect('/user');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        //
    }
}
