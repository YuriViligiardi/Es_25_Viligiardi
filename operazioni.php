<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operazioni.php</title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<body>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    echo "<h3>Il primo numero è: $n1</h3>";
    echo "<h3>Il secondo numero è: $n2</h3>";
    $check = controll($n1, $n2);
    if($check == true){
        $listNumber = array(intval($n1), intval($n2));
        $listOperations = array("Addizione", "Sottrazione", "Moltiplicazione", "Divisione");
        createTable($listNumber, $listOperations);
    }

    function controll($numero1, $numero2){
        if (empty($numero1) || empty($numero2)) {
            if ($numero1 == 0 || $numero2 == 0) {
                return true;
            } else {
                echo "<p style='background-color: red;'>Errore: almeno uno dei due numeri è vuoto</p>";
                echo "<a href='numeri.html'>Ritorna alla pagina numeri.html</a>";
                return false;
            }
        } else {
            return true;
        }
    }
    
    function addition($l){
        $somma = $l[0] + $l[1];
        return $somma;
    }

    function subtraction($l){
        $diff = $l[0] - $l[1];
        return $diff;
    }

    function multiplication($l){
        $molt = $l[0] * $l[1];
        return $molt;
    }

    function division($l){
        if(!($l[0] == 0 || $l[1] == 0)){
            $div = $l[0] / $l[1];
            return $div;
        } else {
            return "<p style='color: red;'>Impossibile</p>";
        }
    }

    function createTable($ln, $lo){
        echo "<table>";
            echo "<tr>";
                echo "<th>Operazione</th>";
                echo "<th>Risultato</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td> $lo[0] </td>";
                echo "<td>" . $num = addition($ln) . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td> $lo[1] </td>";
                echo "<td>" . $num = subtraction($ln) . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td> $lo[2] </td>";
                echo "<td>" . $num = multiplication($ln) . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td> $lo[3] </td>";
                echo "<td>" . $num = division($ln) . "</td>";
            echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>