<?php

use App\Validate\Validate;

require __DIR__ . '/vendor/autoload.php';

// 8 $items = [
//     '78929371',
//     '78924574',
//     '78909762',
//     '78907874',
//     '78927254',
//     '78902312',
//     '78909830',
//     '78925588',
//     '78925519',
//     '78909717',
//     '78909427',
//     '78915640',
//     '78928862',
//     '78907850',
//     '78929395'
// ];

// 10 $items = [
//     '5320000129',
//     '1001027160',
//     '1001037211',
//     '1001060967',
//     '1001060968',
//     '1001051909',
//     '1001061017',
//     '1001035717',
//     '1001061391',
//     '1001059902',
//     '1001060397',
//     '1001036982'
// ];

// 12  $items = [
//     '353885160254',
//     '650240017889',
//     '793573240040',
//     '382904917012',
//     '650240018183',
//     '768455107896',
//     '070501812921',
//     '047400179660',
//     '650240017933',
//     '650240017872',
//     '892456000150'
// ];

//11
$items = [
    '71463047079',
    '70330729155',
    '71463060016',
    '70501017104',
    '12914145241',
    '71463096060',
    '72239151105',
    '71463047680',
    '41554429695',
    '54402700280',
    '41554429718',
    '70330735897'
];

foreach($items as $item) {
    var_dump(Validate::validate($item));
}
