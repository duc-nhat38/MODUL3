<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
    <form action="translate" method="post"> 
        @csrf
        <p style="color: red">{{ $note ?? "" }}</p>
        <table> 
            <tr>
                <td>Nhập từ cần dịch : </td>
                <td><input type="text" name="input" value="{{ $input ?? '' }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Dịch</button></td>
            </tr>
            <tr>
                <td>Kết quả</td>
                <td>{{ $result ?? "" }}</td>
            </tr>
        </table>
    </form>
</body>
</html>