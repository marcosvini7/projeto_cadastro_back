<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = User::all();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $data = json_decode($request->data, true);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = strtolower($image->getClientOriginalExtension());
            if(in_array($extension, ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg'])){
                $path = $image->store('usersImages', 'public');
                $data['image'] = $path;
            } 
        }
        $result = User::create($data);
        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = json_decode($request->data, true);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = strtolower($image->getClientOriginalExtension());
            if(in_array($extension, ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg'])){
                $path = $image->store('usersImages', 'public');
                $data['image'] = $path;
                Storage::disk('public')->delete($user->image);
            } 
        }

        $user->update($data);
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Storage::disk('public')->delete($user->image);
        $user->delete();
        return $user;
    }
}
