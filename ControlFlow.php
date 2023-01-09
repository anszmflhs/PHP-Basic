<?php

//IF Else
$sambutan = '';
$nilai = 8;
if ($nilai > 9) {
    //PHP_EOL Buat ngasih jarak kayak br di html
    $sambutan = 'Great' . PHP_EOL;
} else {
    $sambutan = 'Good' . PHP_EOL;
}
echo $sambutan;

//Else If

$status = '';
if($nilai == 3) {
    $status = 'Bad' . PHP_EOL;
} else if ($nilai == 7) {
    $status = 'Ok' . PHP_EOL;
} else {
    $status = 'Great One' . PHP_EOL;
}
echo $status;

//Switch Case

switch ($nilai) {
    case 3:
        $status = 'Bad';
        break;
    case 7:
        $status = 'Ok';
        // break;
    default:
        $status = 'Great One';
        // break;

        // Break ini biar ga langsung ke nilai yang paling bawah kalo Switch Case jadi harus pake break
}
echo $status;