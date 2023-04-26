<?php
    $com = (int)$_POST['importe'] * 0.075;
    $bon = (int)$_POST['hijos'] * 50;
    $desc = 600 * 0.11;
    $sueldoBruto = 600 - $desc;
    $sueldoNeto = $sueldoBruto + $com;
    echo "La comision es: S/." .$com."<br>";
    echo "La bonificacion es: S/." .$bon."<br>";
    echo "El descuento es: S/." .$desc."<br>";
    echo "El sueldo bruto es: S/." .$sueldoBruto."<br>";
    echo "El sueldo neto es: S/." .$sueldoNeto."<br>";
?>