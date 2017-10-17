<?php

$numerode1 = $_POST["num1"];
$numeroate2 = $_POST["num2"];
$multiplicandode1 = $_POST["multi1"];
$multiplicandoate2 = $_POST["multi2"];



for($i=$numerode1; $i<=$numeroate2; $i++) {

    echo "<br>
    <caption>Tabuado do $i</caption>
        <table border='1'>
        <thead class='cabecalho'>
            <th>Fórmula</th>
            <th>Valor</th>
        </thead>";

    for ($multi3=$multiplicandode1; $multi3<=$multiplicandoate2; $multi3++){
    
        $resultado = ($i * $multi3);
        // echo "$i x $multi3 = $resultado <br>";
    


    echo "<table border='1'>
        <tbody>
            <tr>
                <td>$i x $multi3</td>
                <td>$resultado</td>
            </tr>
        </tbody>
        </table>";
    }
}
?>
