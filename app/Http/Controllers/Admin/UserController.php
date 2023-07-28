<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;
    protected $role;
    public function __construct(User $user, Role $role)
    {
        $this->user = $user ;
        $this->role = $role;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = $this->user->latest('id')->paginate(5);
         return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->role->all()->groupBy('group');
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        $dataCreate = $request->all();
        $dataCreate['password'] = Hash::make($request->password);
        $dataCreate['image'] = $this->user->saveImage($request);
        $user = $this->user->create($dataCreate);
        dd($dataCreate['image']);
        $user->image()->create(['url'=>$dataCreate['image']]);
        return to_route('users.index')->with(['massage'=>'create success']);
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
