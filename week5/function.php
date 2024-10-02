<?php
/*function perkenalan()
{
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Ridho<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan();
perkenalan();*/

/*function perkenalan($nama, $salam)
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Ridho", "Hallo");

echo "<hr>";

$saya = "Ridho";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);*/

/*function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Ridho", "Hallo");

echo "<hr>";

$saya = "Ridho";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
echo "<br><br>";*/

/*function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2005, 2024) . " tahun";*/

function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";

    echo "Saya berusia " . hitungUmur(2005, 2024) . " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Ridho");
