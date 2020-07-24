<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate</title>
    <style>
        table {
            width: 30%;
            height: 400px;
            text-align: center;
            border: 1px solid;
            margin: auto;
        }

        tr,
        td {
            border: 1px solid;
            background-color: white;
        }

        td:hover {
            color: beige;
            background-color: blueviolet;
        }
        h1 {
            text-align: center;
        }
       /* form {
            width: 100%;
            height: 100%;
        } */
        input {
            width: 98%;
            height: 97%;
            font-size: 30px;
        }
        td {
            width: 20%;
        }
        button {
            width: 100%;
            height: 100%;
            border: none;
            background-color: white;
        }
        button:hover {
            color: beige;
            background-color: blueviolet;
        }
    </style>
</head>

<body>
    <h1>Calculator !</h1>
    <form action="/summation" method="get" name="calculator">
    <table>
        <tr>
            <td colspan="5"><input type="text" name="display"></td>
        </tr>
        <tr>
            <td onclick="calculator.display.value += 7">7</td>
            <td onclick="calculator.display.value += 8">8</td>
            <td onclick="calculator.display.value += 9">9</td>
            <td><button type="submit" name="division">/</button></td>
            <td onclick="calculator.display.value += 7">CE</td>
        </tr>
        <tr>
            <td onclick="calculator.display.value += 4">4</td>
            <td onclick="calculator.display.value += 5">5</td>
            <td onclick="calculator.display.value += 6">6</td>
            <td ><button type="submit" name="multiplication">*</button></td>
            <td onclick="calculator.display.value = ''">C</td>
        </tr>
        <tr>
            <td onclick="calculator.display.value += 1">1</td>
            <td onclick="calculator.display.value += 2">2</td>
            <td onclick="calculator.display.value += 3">3</td>
            <td><button type="submit" name="subtraction">-</button></td>
            <td rowspan="2">=</td>
        </tr>
        <tr>
            <td colspan="2" onclick="calculator.display.value += '0'">0</td>
            <td onclick="calculator.display.value += '.'">.</td>
            <td><button type="submit" name="summation">+</button></td>
        </tr>
    </table>
</form>
{{ $re ?? "" }}
</body>

</html>