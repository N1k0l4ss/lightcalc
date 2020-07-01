<!DOCTYPE html>
<html>
    <title>N1k0l4$</title>
    <head>
        <style>
            body { background: url(http://www.datsuncarsandparts.com/data/archive/img/1820409126.jpeg); }
        </style>
    </head>
    <body>
<form method="post">
    <label>Цена до 100 кВт</label>
        <input name = 'to' type = number step = 0.01 placeholder="Цена до 100 кВт" value = 0.9>
    <label>Цена после 100 кВт</label>
    <input name = 'from' type = number step = 0.01 placeholder="Цена после 100 кВт" value = 1.68>
        <hr>
    <input name = 'old' type = number placeholder="Старые показания">
    <input name = 'new' type = number placeholder="Новые показания">
    <input name = 'modcalc' type = submit value="Расчитать" formaction="calc.php">
        <hr>
    <input name = 'score' type = number placeholder="Расход">
    <input name = 'calc' type = submit value="Расчитать" formaction="calc.php">
        <hr>
</form>
    </body>
</html>