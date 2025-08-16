<?php
$a = "15 cats";
$b = "3.14159abc";
$c = "hello123"; 
$d = "024"; // Nếu được ép kiểu thì biến này sẽ thành 24 

$sum =$a + $b + $d; 
/* Không cộng biến $c được vì biến bắt đầu bằng ký tự chữ .
 Phép tính của biến $sum này sẽ tự động ép kiểu và 3 biến $a , $b ,$d đều bắt đầu bằng số 
 vậy nên khi ép kiểu nó sẽ lấy kiểu dữ liệu xuất hiện đầu tiên của chuỗi đó và cộng vào như trong biến $sum đã khai báo  */
echo $sum .PHP_EOL;
var_dump($sum) .PHP_EOL;

 



