@extends('manager.index')

@section('content')
<form action="{{ route('manager.update' ,$manager->id ) }}" method="post">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="name">Họ và tên :</label>
        <input type="text" class="form-control" id="exampleInputName1" value="{{ $manager->name ?? '' }}"
            aria-describedby="namelHelp" placeholder="Họ và tên" minlength="2" required>
    </div>
    <div class="form-group">
        <label for="phone">Số điện thoại :</label>
        <input type="number" class="form-control" id="exampleInputPhone1" value="{{ $manager->phone ??'' }}"
            aria-describedby="phonelHelp" placeholder="Số điện thoại" minlength="10" maxlength="10" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email :</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $manager->email ?? '' }}"
            aria-describedby="emailHelp" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="nameImage">Tên ảnh :</label>
        <input type="password" class="form-control" id="exampleInputNameImage1" value="{{ $manager->images ??'' }}"
            placeholder="Tên ảnh (không chứa khoảng trắng)"><br>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-success">Đồng ý</button>
</form>
@endsection