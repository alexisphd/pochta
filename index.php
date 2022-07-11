<!DOCTYPE html>
<html>
<head>
    <title>PochtaCalculate</title>
    <meta charset="utf-8" />
</head>
<body>

<h3>Форма ввода данных об отправлении</h3>
<form method="POST" action="create.php" >
    <p>From: <input type="text" name="townFrom" /></p>
    <p>To: <input type="text" name="townTo" /></p>
    <p>Weight: <input type="number" name="weight" /></p>
    <p>Date: <input type="date"  name="date" /></p>

    <input type="radio" checked name="speed" value="fast"> Fast
    <input type="radio" name="speed" value="slow"> Slow
    <select name="transport">
        <option>
Почта
        </option>
        <option>
Боксберри
        </option>
        <option>
СДЭК
        </option>
    </select>

    <input type="submit" value="Отправить">
</form>




