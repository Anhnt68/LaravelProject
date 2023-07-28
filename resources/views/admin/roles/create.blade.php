@extends('admin.layouts.app')
@section('title', 'Roles')

@section('content')
    <div class="page-content">
        <div class="card-body">
            <h4 class="card-title">Role Add</h4>

            <form method="post" action="{{route('roles.store')}}" enctype="multipart/form-data">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <div class="form-group">
                    <label for="simpleinput">Name</label>
                    <input type="text" name="name" id="simpleinput" class="form-control" value="{{old('name')}}" placeholder="Enter your text">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="simpleinput">Display Name</label>
                    <input type="text" name="display_name" id="simpleinput" class="form-control" value="{{old('display_name')}}"
                        placeholder="Enter your text">
                    @error('display_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="simpleinput">Group Name</label>
                    <select name="group" id="" class="form-control">
                        <option value="system">System</option>
                        <option value="user">User</option>
                    </select>
                    @error('group')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="flexCheckDefault">
                        Permissions
                    </label>
                    @foreach ($permissions as $groupName => $permission)
                        <h4>{{ $groupName }}</h4>
                        <div class="form-group">
                            @foreach ($permission as $item)
                                   <div class="form-group">
                                       <input class="form-check-input" type="checkbox" value="{{ $item->id }}" name="permission_ids[]">
                                       <label for="">{{ $item->display_name}}</label>
                                   </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>


                @csrf
                @method('post')
                <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Thêm mới</button>

                <a href="" class="btn btn-warning btn-rounded waves-effect waves-light">Quay
                    lại</a>
            </form>
        </div>
    </div>
@endsection
