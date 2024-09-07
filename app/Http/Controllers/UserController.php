<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('petugas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name'=>'required|max:255|string',
            'username'=>'required|max:255|string|unique:users',
            'avatar'=>'mimes:png,jpg,jpeg|max:5480|required'
        ]);

        if($request->hasFile('avatar'))
        {
            $gambar = $request->file('avatar');
            $extension = $gambar->getClientOriginalExtension();
            $path_destination = 'public/images/avatar';
            $name = 'avatar_'.Carbon::now()->format('Ymd_his').'.'.$extension;
            $path = $request->file('avatar')->storeAs($path_destination, $name);
            $input['avatar'] = $name;
        }

        User::create($input);
        return redirect()->route('petugas.index')->with('success','Petugas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = User::findOrFail($id);
        return view('petugas.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
