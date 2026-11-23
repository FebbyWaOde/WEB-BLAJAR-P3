<?php
$kurir = "jne";
$berat = 7.2;

switch ($kurir) {
    case "jne":
        $ongkir = $berat * 1.0;
        echo "Ongkir JNE: Rp " . number_format($ongkir, 0, ',', '.');
        break;
    case "jnt":
        $ongkir = $berat * 0.9;
        echo "Ongkir JNT: Rp " . number_format($ongkir, 0, ',', '.');
        break;
    case "pos":
        $ongkir = $berat * 1.2;
        echo "Ongkir POS: Rp " . number_format($ongkir, 0, ',', '.');
        break;
    default:
        echo "Kurir tidak dikenal ";
        break;
}
?>
