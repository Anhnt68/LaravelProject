@extends('admin.layouts.app')
@section('title', 'Roles')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                    <div class="card">
                        @if(session('message'))
                            <div>{{session('message')}}</div>
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">Danh sách danh mục</h4>
                            <p class="card-subtitle mb-4">
                                DataTables has most features enabled by default, so all you need to do to use it with your own
                                tables is to call the construction
                                function:
                            </p>

                            <table id="basic-datatable" class="table dt-responsive nowrap">

                                <a href="{{ route('users.create') }}" type="submit" class="btn btn-success waves-effect waves-light">Thêm
                                    mới</a>


                                <thead>
                                    <tr>
                                        <th style="width:5%">STT</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Địa chỉ</th>
                                        <th>Giới tính</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($data as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img src="{{$value->image?asset('uploads/users/'.$value->image->first()->url):''}}}" width="100px" height="100px"></td>

                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>{{ $value->phone }}</td>
                                            <td>{{$value->address}}</td>
                                            <td>{{$value->gender}}</td>
                                            <td>{{ $value->created_at }}</td>
                                            <td>{{ $value->updated_at }}</td>
                                            <td>
                                                <a href="{{route('users.edit', $value->id)}}" class="btn btn-warning">Edit</a>
                                                <div class="">
                                                    <form action="{{ route('users.destroy', $value->id) }}"
                                                          id="item-{{ $value->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"
                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"> <i
                                                                class="bi bi-trash-fill fs-6 text-white mx-2"></i>Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                            {{-- <td class="d-flex space-around">
                                                <div class="">
                                                    <form action="{{ route('admin.category.edit', ['id' => $value->id]) }}"
                                                        id="item-{{ $value->id }}" method="get">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-primary"><i
                                                                class="bi bi-pencil-square fs-6 text-white mx-2"></i></button>
                                                    </form>
                                                </div>
                                                <div class="">
                                                    <form action="{{ route('admin.category.delete', ['id' => $value->id]) }}"
                                                        id="item-{{ $value->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"> <i
                                                                class="bi bi-trash-fill fs-6 text-white mx-2"></i></button>
                                                    </form>
                                                </div>

                                            </td> --}}
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
@endsection
