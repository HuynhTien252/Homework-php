<?php # Khai báo để sử ngôn ngữ php
$arr = [3,4,1,7,9]; 
/* Trong đoạn code biến arr dùng cách khai báo mới của php là khai báo bằng dấu [ ] 
trong mảng khi khai báo chỉ có value mà không có key(từ khóa) thì trình biên dịch sẽ tự động khởi tạo giá trị ban đầu (key) là 0  */
 
$sum = array_sum($arr); // Hàm array_sum() dùng để  tính tổng các phần tử trong mảng đó
echo $sum .PHP_EOL; // dùng echo để in ra biến chứa phần tính tổng của mảng và lệnh PHP_EOL là lệnh để xuống dòng

$max = max($arr); // Dùng hàm max để tìm giá trị cao nhát trong mảng
echo $max. PHP_EOL; // Dấu . trong câu là một toán tử nói chuỗi cũng tự như dấu ( , ) trong các ngôn ngữ lập trình khác

$min = min($arr); //  Cũng giống như công dụng của hàm max thì hàm min ngược lại sẽ tìm phần tử nhỏ nhất trong mảng đó
echo $min . PHP_EOL ;

