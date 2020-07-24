@extends('manager.index')
@section('content')

<form action="{{ route("manager.store") }}" method="post" class="formAdd" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Họ và tên :</label>
        <input type="text" class="form-control" name="name" id="exampleInputName1" aria-describedby="namelHelp"
            placeholder="Họ và tên" minlength="2" required>
    </div>
    <div class="form-group">
        <label for="phone">Số điện thoại :</label>
        <input type="number" class="form-control" name="phone" id="exampleInputPhone1" aria-describedby="phonelHelp"
            placeholder="Số điện thoại" minlength="10" maxlength="10" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email :</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1"></label>
        <input type="file" class="form-control-file" name="images" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-success">Đồng ý</button>
</form>
@endsection