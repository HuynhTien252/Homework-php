<?php
$str = "123.45";
echo "Trước" . PHP_EOL;
echo $str . PHP_EOL;

$fl = (float) $str + 2; // cộng thêm số 2 để cho thấy biến $str đã được đổi thành kiểu float
echo "Sau" . PHP_EOL;
echo $fl . PHP_EOL;


