<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thời gian trên thế giới </title>
</head>
<body>
    <form action="getTimezone" method="get">
        @csrf
        {!! $note ?? "" !!}
      <label for="">Chọn địa điểm : </label>
      <select name="select" value="{{ $place ?? "Chọn thành phố" }}">
        <option value="America/Chihuahua">Chihuahua, Mexico</option>
        <option value="America/Costa_Rica">Costa Rica</option>
        <option value="America/Havana">La Habana, Cuba</option>
        <option value="Asia/Hong_Kong">Hồng Kông</option>
        <option value="Asia/Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
      </select>
      <p>Giờ hiện tại : {{ $place ?? "" }} là {{ $result ?? ""}}</p>
      <input type="submit">
    </form>
</body>
</html>