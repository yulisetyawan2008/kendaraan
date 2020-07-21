<?php

require_once'hewan.php';

$elang = new hewan;
$elang->set_jumlahKaki('2');
echo 'Elang 1 Jumlah Kaki.. ' . $elang->get_jumlahKaki();
$elang->set_keahlian('terbang rendah');
echo ' Sedang..' . $elang->get_keahlian();

echo "<br>";

$elang_2 = new hewan;
$elang_2->set_JumlahKaki('2');
echo 'Elang 2 Jumlah Kaki.. ' . $elang_2->get_jumlahKaki();
$elang_2->set_keahlian('terbang tinggi');
echo ' Sedang.. ' . $elang_2->get_keahlian();

echo "<br>";

$elang_3 = new hewan;
$elang_3->set_JumlahKaki('2');
echo 'Elang 3 Jumlah Kaki.. ' . $elang_3->get_jumlahKaki();
$elang_3->set_keahlian('terbang tinggi');
echo ' Sedang.. ' . $elang_3->get_keahlian();

echo "<br>";

$harimau = new hewan;
$harimau->set_JumlahKaki('4');
echo 'Harimau 1 Jumlah Kaki.. ' . $harimau->get_jumlahKaki();
$harimau->set_keahlian('lari cepat');
echo ' Sedang.. ' . $harimau->get_keahlian();

?>