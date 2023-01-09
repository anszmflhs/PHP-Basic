<?php
//Looping biar kerjanya ga lama

$arraySiswa = ['Rio','Aldo','Dzakwan','Anas'];

// For Pake Index
for ($i=0; $i < count($arraySiswa); $i++) {
    echo "$arraySiswa[$i] \n";
}

$array2 = [
    'first_name' => 'IDN',
    'last_name' => 'Hebat',
];
foreach ($arraySiswa as $key => $value) {
    echo "Key : $key\nValue : $value\n";
}
foreach ($array2 as $key => $value) {
    echo "Key : $key\nValue : $value\n";
}

foreach ($array2 as $key => $value) {
    echo "Key : $key\nValue : $value\n";
}
foreach ($arraySiswa as $key => $value) {
    echo "Value : $value\n";
}

$data = ['Robi','Doni'];
$index = 0;
while ($data) {
    echo "$data[$index]\n";
    if($index > 1) {
        break;
    }
}
do {
    echo "Running \n";
    $index++;
} while (count($data) > 5);