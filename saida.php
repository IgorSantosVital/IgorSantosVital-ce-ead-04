<?php

$numerode1 = $_POST["num1"];
$numeroate2 = $_POST["num2"];
$multiplicandode1 = $_POST["multi1"];
$multiplicandoate2 = $_POST["multi2"];
?>

<!DOCTYPE html>
    <html>
    <link rel='stylesheet' href='css/table.css'>
    <br>
<?php for($i=$numerode1; $i<=$numeroate2; $i++){ ?>


        <table>
        <caption><h4>Tabuado do <?php echo $i ?></h4></caption>
        <thead>
            <th>Fórmula</th>
            <th>Valor</th>
        </thead>
        
<tbody>
    <?php for ($multi3=$multiplicandode1; $multi3<=$multiplicandoate2; $multi3++) { ?>
    
            <tr>
                <td><?php echo $i.'x'.$multi3 ?> </td>
                <td><?php echo ($i * $multi3) ?> </td>
            </tr>
        
    <?php } ?>
    </tbody>
    </table>
<?php } ?>

</html>