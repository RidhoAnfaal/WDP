<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "Hari ke $hari: jarak saat ini = $jarakSaatIni <br>";
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "Pemanenan buah:<br>";
echo "================<br>";

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $buahDitanam = ($tanamanPerlahan * $buahPerTanaman);
    $jumlahBuah += $buahDitanam;
    echo "Lahan $i : Jumlah buah = $buahDitanam<br>";
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br><br>";

echo "Skor Ujian :<br>";
echo "===========<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $idx => $skor) {
    echo "Ujian ke-" . ($idx + 1) . ": $skor<br>";
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br><br>";

echo "Penilaian siswa:<br>";
echo "==================<br>";

$nilaiSiswa = [82, 95, 58, 64, 90, 55, 88, 79, 70, 96];
$lulus = 0;
$tidakLulus = 0;

foreach ($nilaiSiswa as $idx => $nilai) {
    if ($nilai < 60) {
        echo "Siswa " . ($idx + 1) . " : nilai = $nilai (Tidak lulus)<br>";
        $tidakLulus++;
        continue;
    } else {
        echo "Siswa " . ($idx + 1) . " : nilai = $nilai (Lulus)<br>";
        $lulus++;
    }
}

echo "==================<br>";
echo "Jumlah siswa yang lulus: $lulus<br>";
echo "Jumlah siswa yang tidak lulus: $tidakLulus<br>";
