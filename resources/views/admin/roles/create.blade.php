@extends('admin.layouts.app')
@section('title', 'Roles')

@section('content')
    <div class="page-content">
        <div class="card-body">
            <h4 class="card-title">Role Add</h4>

            <form method="post" enctype="multipart/form-data">
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
                    <input type="text" name="name" id="simpleinput" class="form-control" placeholder="Enter your text">

                </div>
                <div class="form-group">
                    <label for="simpleinput">Display Name</label>
                    <input type="text" name="display_name" id="simpleinput" class="form-control"
                        placeholder="Enter your text">

                </div>
                <div class="form-group">
                    <label for="simpleinput">Group Name</label>
                    <input type="text" name="group" id="simpleinput" class="form-control"
                        placeholder="Enter your text">

                </div>
                <div class="form-group">
                    <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                    </label>
                    @foreach ($permissions as $groupName => $permission)
                        {{ dd($permissions) }}
                        <h4>{{ $groupName }}</h4>
                        <div>
                            @foreach ($permission as $item)
                                <h4>
                                    {{ $item->display_name }}
                                </h4>
                                <input class="form-check-input" type="checkbox" value="{{ $item->id }}"
                                    id="flexCheckDefault">
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
