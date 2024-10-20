<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operazioni.php</title>
</head>
<body>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    echo "<h3>Il primo numero è: $n1</h3>";
    echo "<h3>Il secondo numero è: $n2</h3>";
    $check = controll($n1, $n2);
    if($check == true){
        $list = array(intval($n1), intval($n2));
        addition($list);
        subtraction($list);
        multiplication($list);
        division($list);
    }

    function controll($numero1, $numero2){
        if (empty($numero1) || empty($numero2)) {
            echo "<p style='background-color: red;'>Errore: almeno uno dei due numeri è vuoto</p>";
            echo "<a href='numeri.html'>Ritorna alla pagina numeri.html</a>";
            return false;
        } else {
            return true;
        }
    }
    
    function addition($l){
        $somma = $l[0] + $l[1];
        echo "<p>Il risultato della somma dei due numeri è: $somma</p>";
    }

    function subtraction($l){
        $diff = $l[0] - $l[1];
        echo "<p>Il risultato della sottrazione dei due numeri è: $diff</p>";
    }

    function multiplication($l){
        $molt = $l[0] * $l[1];
        echo "<p>Il risultato della moltiplicazione dei due numeri è: $molt</p>";
    }

    function division($l){
        $div = $l[0] / $l[1];
        echo "<p>Il risultato della divisione dei due numeri è: $div</p>";
    }

    ?>
</body>
</html>