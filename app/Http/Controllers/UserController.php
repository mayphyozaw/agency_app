<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {

        // store file path in database and project
        if ($request->hasFile('photo')) {
            $file_photo = $request->file('photo');
            $photo_path = $file_photo->store('public/users');
        }

        if ($request->hasFile('frontphoto')) {
            $file_frontphoto = $request->file('frontphoto');
            $nrc_front_path = $file_frontphoto->store('public/users');
        }


        if ($request->hasFile('backphoto')) {
            $file_backphoto = $request->file('backphoto');
            $nrc_back_path = $file_backphoto->store('public/users');
        }

        if ($request->hasFile('householderphoto')) {
            $file_householderphoto = $request->file('householderphoto');
            $householder_path = $file_householderphoto->store('public/users');
        }


        $user = new User();
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->nrc = $request->nrc;
        $user->photo = $photo_path ?? null;
        $user->frontphoto = $nrc_front_path ?? null;
        $user->backphoto = $nrc_back_path ?? null;
        $user->householderphoto = $householder_path ?? null;
        $user->joindate = $request->joindate;

        $user->save();
        $user->syncRoles($request->roles);
        return redirect()->route('user.index')->with('success', "User Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::findOrFail($id);
        $roles = Role::all();
        $old_roles = $user->roles->pluck('id')->toArray();
        return view('user.edit', compact('user', 'roles', 'old_roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        // store file path in database and project
        if ($request->hasFile('photo')) {
            $file_photo = $request->file('photo');
            $photo_path = $file_photo->store('public/users');
        }

        if ($request->hasFile('frontphoto')) {
            $file_frontphoto = $request->file('frontphoto');
            $nrc_front_path = $file_frontphoto->store('public/users');
        }


        if ($request->hasFile('backphoto')) {
            $file_backphoto = $request->file('backphoto');
            $nrc_back_path = $file_backphoto->store('public/users');
        }

        if ($request->hasFile('householderphoto')) {
            $file_householderphoto = $request->file('householderphoto');
            $householder_path = $file_householderphoto->store('public/users');
        }


        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = Hash::make($request->password) ?? $user->password;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->nrc = $request->nrc;
        $user->photo = $photo_path ?? $user->photo;
        $user->frontphoto = $nrc_front_path ?? $user->frontphoto;
        $user->backphoto = $nrc_back_path ?? $user->backphoto;
        $user->householderphoto = $householder_path ?? $user->householderphoto;
        $user->joindate = $request->joindate;

        $user->update();
        $user->syncRoles($request->roles);
        return redirect()->route('user.index')->with('success', "User Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', "User  has been deleted Successfully");
    }


    public function bulkDelete(Request $request)
    {
        $userIds = $request->input('selected_users');
        if (!$userIds) {
            return redirect()->back()->with('error', 'No users selected.');
        }

        User::whereIn('id', $userIds)->delete();
        return redirect()->route('user.index')->with('success', 'Selected users deleted successfully.');
    }
}
