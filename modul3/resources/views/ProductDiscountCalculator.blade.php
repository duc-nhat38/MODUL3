<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
</head>
<body>
    <form action="calculator" method="post">
        @csrf 
            <table>
                <tr>
                    <td><label for="">Product Description: </label></td>
                    <td><input type="text" name="Description"><br></td>
                </tr>
                <tr>
                    <td><label for="">List Price: </label></td>
                    <td><input type="number" name="ListPrice" min="1"><br></td>
                </tr>
                <tr>
                    <td><label for="">Discount Percent:</label></td>
                    <td><input type="number" name="DiscountPercent" min="1"><br></td>
                </tr>
                <tr>
                    <td><input type="submit"></td>
                </tr>
            </table>    
    </form>
</body>
</html>