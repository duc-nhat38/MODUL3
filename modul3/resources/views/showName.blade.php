<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @forelse ($all as $item)
        <h1>{{ $item->fullName }}</h1>
    @empty
        <h1>Không có</h1>
    @endforelse
</body>
</html>