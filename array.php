<?php

// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$arr1 = ["Rabu", "Juni", 30, true];

// menampilkan array var_dump() / print_r()
var_dump($hari);
echo "<br>";

// menampilkan satu elemen array
echo $arr1[1];
echo "<br>";

// menambahkan elemen baru pada array
$hari[] = "Kamis";
$hari[] = "jumat";
var_dump($hari);
echo "<br>";

// menampilkan semua array ke user
foreach ($hari as $h) {
    echo "$h <br>";
}

// array asosiatif -> array yang memiliki index berupa string
$siswa = [
    'nama' => 'agus',
    'umur' => 16,
    'email' => 'agusganteng@gmail.com'
];

// cara menampilkan satu elemen
echo $siswa['email'] . '<br>';

// foreach ($siswa as $s) {
//     echo "$s  <br>";
// }
// ;

// multiple array -> array di dalam array (multidimensi)
$angka = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
echo $angka[1][1] . '<br>';
foreach ($angka as $a) {
    //cara perta,a
    echo $a[0] . '<br>';
    echo $a[1] . '<br>';
    echo $a[2] . '<br>';
    //cara kedua
    foreach ($a as $b) {
        echo $b . '<br>';
    }
    echo '<br>';
}
;

// latihan 2
$siswa = [
    ['nama' => 'matahari', 'umur' => 16, 'hobi' => 'Futsal'],
    ['nama' => 'bulan', 'umur' => 16, 'hobi' => 'Nyanyi'],
    ['nama' => 'jupiter', 'umur' => 16, 'hobi' => 'Nulis'],

];

foreach ($siswa as $s) {
    echo "nama : " . $s['nama'] . '<br>';
    echo "umur : " . $s['umur'] . '<br>';
    echo "hobi : " . $s['hobi'] . '<br>';

    echo '<br>';
}
foreach ($siswa as $s) {
    echo "<ul>";
    echo "<li>nama : " . $s['nama'] . "</li>";
    echo "<li>umur : " . $s['umur'] . "</li>";
    echo "<li>hobi : " . $s['hobi'] . "</li>";
    echo "</ul>";
}
?>