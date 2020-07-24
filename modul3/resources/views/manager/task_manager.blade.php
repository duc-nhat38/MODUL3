@extends('manager.index')
@section('content')
<h1>Danh sách khách hàng !</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Họ & Tên</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($listManager as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->name  ?? ''}}</td>
            <td>{{ $item->phone ?? '' }}</td>
            <td>{{ $item->email ?? '' }}</td>
            <td><img src="/upload/{{ $item->images}}" alt=""></td>
            <td>
                <a class="btn btn-success" href="{{ route("manager.edit" ,$item->id ) }}">Sửa</a>
                <a onclick="return confirm('Bạn muốn xóa ?')" class="btn btn-success" href="{{ route("manager.delete" ,$item->id ) }}">Xóa</a>
                
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Không có tên khách hàng nào !</td>
        </tr>
        @endforelse
    </tbody>
</table>
<div class="add">
    <a href="{{ route("manager.create") }}" class="btn btn-success">Thêm</a>
</div>
<div id="div">
    @include('notify::messages')
    @notifyJs
</div>
@endsection