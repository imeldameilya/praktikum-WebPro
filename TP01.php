<?php
$n = 18; // nilai modal

function isPrima($x){ // fungsi cek bilangan prima
    if($x < 2){
        return false;
    }
    for($i = 2; $i < $x; $i++){
        if($x % $i == 0){
            return false;
        }
    }
    return true;
}
function jumlahFaktor($x){ // fungsi menghitung jumlah faktor
    $count = 0;

    for($i = 1; $i <= $x; $i++){
        if($x % $i == 0){
            $count++;
        }
    }
    return $count;
}
$hasilP = 0;
$faktorTerbanyak = 0;

for($p = 2; $p <= $n; $p++){

    if(isPrima($p) && $n % $p == 0){ // p harus prima dan membagi N

        $totalTelur = $n * $p; // jumlah telur yang didapat

        $faktor = jumlahFaktor($totalTelur); // hitung banyak kemungkinan kemasan

        if($faktor > $faktorTerbanyak){
            $faktorTerbanyak = $faktor;
            $hasilP = $p;
        }

    }

}
echo $hasilP;
?>