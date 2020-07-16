<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Discount</title>
</head>
<body>
    <p>Mô tả sản phẩm : {{ $Description }}</p>
    <p>Giá niêm yết : {{ $ListPrice }} đ</p>
    <p>Tỉ lệ chiết khấu : {{ $DiscountPercent }} %</p>
    <p>Lượng chiết khấu : {{ $DiscountAmount }} đ</p>
    <p>Giá sau chiết khấu : {{ $DiscountPrice }} đ</p>
</body>
</html>