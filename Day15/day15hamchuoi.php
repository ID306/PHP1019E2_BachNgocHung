<meta charset="UTF-8">
<?php
//Demo 1 số hàm thao tác với chuỗi
$string = "abc def";

//chuyển thành chữ hoa
echo strtoupper ($string); //ABC DEF
echo "<br/>";

//chuyển ký tự đầu tiên thành chữ hoa
$string = "hello abc";
echo ucfirst($string); //Hello abc
echo "<br/>";

//chuyển ký tự đâù tiên của mỗi từ thành chữ hoa
$string = "my name is";
echo ucwords ($string); //My Name Is
echo "<br/>";

//Xóa các khoảng trắng ở đầu và cuối chuỗi
$string = "     abc def";
echo trim($string); //abc def
echo "<br/>";

//tìm kiếm và thay thế
$string = "abc def";
echo str_replace("abc", "xyz", $string);//xyz def
echo "<br/>";

//tìm kiếm và thay thế theo chuỗi
//thay thế tất cả các ký tư nào là số bằng 1 dấu -\
$string = "anh yêu em 1 2 3 5 hahaha đánh rơi nhịp 4";
echo preg_replace('/[0-9]/', '-', $string);
echo "<br/>";

//cắt chuỗi
$string = "hello dendi";
echo substr ($string, 6, 5);//dendi
echo "<br/>";

//Hàm thao tác với thời gian - ngày tháng
$datetime = "2019-20-12 20:15:00";
//format lại
echo date('d-m-Y H:i:s', strtotime($datetime));
echo "<br/>";

//lấy ra thời gian hiện tại - theo giờ VN
date_default_timezone_set( 'Asia/Ho_Chi_minh');
echo date ('d/m/Y H:i:s', time());
echo "<br/>";

//thao tác với số
$price = 1250000;
echo number_format ($price, 0,'.', '.');
