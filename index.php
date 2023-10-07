<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio POO Individual 3</title>
</head>
<body>

<form method="POST" action="">
    <table>
        <tr>            
        <tr>
            <td>
                <label>Valor 1:</label>
                <input type="number" name="numero1">
            </td>
        </tr>
        <tr>            
        <tr>
            <td>
                <label>Valor 2:</label>
                <input type="number" name="numero2">
            </td>
        </tr>
    </table>
    <input type="submit" name="boton1" value="Suma">
    <input type="submit" name="boton2" value="Resta">
    <input type="submit" name="boton3" value="Multiplicación">
</form>

<?php
//Llamar a la función

include('Suma.php');
include('Resta.php');
include('Multiplicacion.php');

//Crear un objeto ; Instanciar

$cargar1=new Suma();
$cargar2=new Resta();
$cargar3=new Multiplicacion();

//Aginar parámetros a atributos mediante un set

//SUMA

$cargar1->setValor1($_POST['numero1']);
$cargar1->setValor2($_POST['numero2']);
$cargar2->setValor1($_POST['numero1']);
$cargar2->setValor2($_POST['numero2']);
$cargar3->setValor1($_POST['numero1']);
$cargar3->setValor2($_POST['numero2']);

echo '<hr>';
if(isset($_POST['boton1']))
{
    $cargar1->funcionBoton1($cargar1);
}

//RESTA



elseif(isset($_POST['boton2']))
{
    $cargar2->funcionBoton2($cargar2);
} 

//MULTIPLICACIÓN



elseif(isset($_POST['boton3']))
{
    $cargar3->funcionBoton3($cargar3);
} 

?>

</body>
</html>