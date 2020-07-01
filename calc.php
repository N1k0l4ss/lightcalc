<!DOCTYPE html>
<html>
<title>N1k0l4$</title>
<head>
    <style>
        body { background: url(http://www.datsuncarsandparts.com/data/archive/img/1820409126.jpeg); }
    </style>
</head>
<body>

<?php
if (isset($_POST['modcalc']))
{
    echo $_POST['new'].' - '.$_POST['old']. ' = ';
    $_POST['score']=abs($_POST['new']-$_POST['old']);
    echo $_POST['score'].'<hr>';
    calc();
}
else if (isset($_POST['calc']))
    calc();

function calc()
{
    echo "Цена до 100 кВт - ".$_POST['to']."<br>Цена после 100 кВт - ". $_POST['from']. "<hr>";
    echo "Расход - ".$_POST['score']. "<hr>";
    if ($_POST['score']>100)
        echo "К оплате ".(($_POST['score']-100)*$_POST['from']+100*$_POST['to']);
    else
        echo "К оплате ".($_POST['score']*$_POST['to']);
}
?>
<hr>
<form>
<input type = submit formaction=".." value="Вернуться на главную страницу">
</form>
    </body>
</html>
