<?php
        $precio=(int)$_POST['precio'];
        $cant=(int)$_POST['cant'];
        $nuevoP=$precio - ($precio*0.05);
        $importeComp=$nuevoP*$cant;
        $importeDesc=$importeComp*0.07;
        $importePago=$importeComp - $importeDesc;
        $obsequio= $cant * 2;
        echo "El nuevo precio será de: " .$nuevoP."<br>";
        echo "El importe de compra es: " .$importeComp."<br>";
        echo "El importe de descuento es: " .round($importeDesc,2)."<br>";
        echo "El importe de pago es: " .round($importePago,2)."<br>";
        echo "La cantidad de caramelos es: " .$obsequio."<br>";
?>