@extends('admin.layouts.app')
@section('title', 'Users')

@section('content')
    <div class="page-content">
        <div class="card-body">
            <h4 class="card-title">User Add</h4>

            <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <div class="row">
                    <div class=" input-group-static col-5 mb-4">
                        <label>Image</label>
                        <input type="file" accept="image/*" name="image" id="image-input" class="form-control">
                        @error('image')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <img src="" id="show-image" alt=""style="width: 50px; height:50px">
                    </div>
                </div>

                <div class="form-group">
                    <label for="simpleinput">Name</label>
                    <input type="text" name="name" id="simpleinput" class="form-control" value="{{ old('name') }}"
                        placeholder="Enter your text">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="simpleinput">Email</label>
                    <input type="text" name="email" id="simpleinput" class="form-control" value="{{ old('email') }}"
                        placeholder="Enter your text">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="simpleinput">Password</label>
                    <input type="password" name="password" id="simpleinput" class="form-control"
                        placeholder="Enter your text">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="simpleinput">Phone number</label>
                    <input type="text" name="phone" id="simpleinput" class="form-control" value="{{ old('phone') }}"
                        placeholder="Enter your text">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="simpleinput">Địa chỉ</label>
                    <textarea name="address" id="simpleinput" class="form-control">{{ old('address') }}</textarea>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="simpleinput">Giới tính</label>
                    <select name="gender" id="" class="form-control">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                    @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="flexCheckDefault">
                        Permissions
                    </label>
                    @foreach ($roles as $groupName => $role)
                        <h4>{{ $groupName }}</h4>
                        <div class="form-group">
                            @foreach ($role as $item)
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" value="{{ $item->id }}"
                                        name="role_ids[]">
                                    <label for="">{{ $item->display_name }}</label>
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
@section('script')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(() => {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#show-image').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#image-input").change(function() {
                readURL(this);
            });



        });
    </script>
@endsection
