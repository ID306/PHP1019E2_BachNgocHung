<meta charset="UTF-8">
<?php
//Toán tử
//Toán tử số học
$number1 = 5;
$number2 = 2;
$result1 = $number1 + $number2;
$result2 = $number1 - $number2;
$result3 = $number1 * $number2;
$result4 = $number1 / $number2;
$result5 = $number1 % $number2;

echo "Tổng = $result1 <br/>";
echo "Hiệu = $result2 <br/>";
echo "Tích = $result3 <br/>";
echo "Thương = $result4 <br/>";
echo "Chia lấy dư = $result5 <br/>";

$number1++;
$number2--;
echo "Tăng tích lũy lên 1 = $number1 <br/>";
echo "Trừ tích lũy 1 = $number2 <br/>";

//Toán tử So Sánh
$number1 = 5;
$number2 = -2;
$result1 = $number1 > $number2; //true
$result2 = $number1 >= $number2; //true
$result3 = $number1 == $number2; //false
$result4 = $number1 < $number2; //false
$result5 = $number1 <= $number2; //false
$result6 = $number1 != $number2; //true

//Toán tử logic
$number1 = 4;
$number2 = -2;
//AND &&
$result1 = ($number1 != 0) && ($number2 == 0); //false
//OR ||
$result2 = ($number1 != 0) || ($number2 == 0); //true
//NOT !
$result3 = ! ($number1 > $number2); //false

//Toán tử gán
$number1 = 5;
$number1 += 2; //$number1 = $number1 + 2 //7
$number1 -= 1; // 6
$number1 *= 2; // 12
$number1 /= 4; // 3
$number1 %= 2; // 1

// Toán tử điều kiện
$number1 = 0;
if ($number1 > 0){
    echo ">0";
}
else {
    echo "<=0 <br/>";
}
echo $number1 > 0 ? ">0" : "<=0";
echo "<br/>";
$number1 = 10;
$number2 = 7;
echo "<span style='color:red'>";
echo "$number1 + $number2 = " . ($number1 + $number2);
echo "<br/>";
echo "$number1 - $number2 = " . ($number1 - $number2);
echo "<br/>";
echo "$number1 * $number2 = " . ($number1 * $number2);
echo "<br/>";
echo "$number1 / $number2 = " . ($number1 / $number2);
echo "<br/>";
echo "$number1 % $number2 = " . ($number1 % $number2);
echo "<br/>";
echo "</span>";

$number = 8;
echo "<span style='color:red'>";
echo "Giá trị hiện tại là " . ($number);
echo "<br/>";
echo "Cộng thêm 2. Giá trị hiện tại là " . ($number+=2);
echo "<br/>";
echo "Trừ đi 4. Giá trị hiện tại là " . ($number-=4);
echo "<br/>";
echo "Nhân với 5. Giá trị hiện tại là " . ($number*=5);
echo "<br/>";
echo "Chia cho 3. Giá trị hiện tại là " . ($number/=3);
echo "<br/>";
echo "Tăng giá trị lên 1. Giá trị hiện tại là " . (++$number);
echo "<br/>";
echo "Giảm giá trị xuống 1. Giá trị hiện tại là " . (--$number);
echo "<br/>";
echo "</span>";

//Câu lệnh ĐIỀU KIỆN
$number1 = 5;
//If
if ($number1 > 0){
    //thực thi code nếu biểu thức so sánh trả về true
}
//IF ELSE
if ($number1 > 0) {
    echo "> 0";
}
else {
    echo "< 0";
}
echo "<br/>";
//IF ELSEIF .. ELSE
if ($number == 20) {
    echo "";
}
elseif ($number == 15) {
    echo "";
}
elseif ($number == 10) {
    echo "";
}
else {
    echo "";
}
echo "<br/>";
//switch -case
$name = "Hung";
switch ($name){
    case "A" :
        echo "Name là A";
        break;
    case "B" :
        echo "Name là B";
        break;
    default:
        echo "Name khác A hoặc B";
}
echo "<br/>";
// VÒNG LẬP
//FOR
$number = 10;
for ($i = 1; $i < $number; $i++){
    echo "$i";
}
echo "<br/>";

//WHILE
$number = 5;
$i = 1;
while ($i < $number){
    echo "$i";
    $i++;
}
echo "<br/>";

//do while
$number = 2;
$i = 0;
do {
    echo $i;
}while ($i > $number);
echo "<br/>";

//Từ khóa continue, break
//BREAK
for ($i = 1; $i < 10; $i ++){
    if ($i == 2) {
        break;
    }
    echo $i;
}
echo "<br/>";

//CONTINUE
for ($i = 1; $i < 5; $i++) {
    if ($i > 2) {
        continue;
    }
    echo $i;
}

?>
<?php if ($number == 20) : ?>
    <p></p>
<?php elseif($number == 15) : ?>
    <p></p>
<?php elseif($number == 10) : ?>
    <p></p>
<?php else: ?>
    <p></p>
<?php endif; ?>




<?php if ($number1 > 0) : ?>
<p>Lớn hơn 0</p>
<?php else: ?>
<p>Nhỏ hơn 0</p>
<?php endif; ?>



<?php
if ($number1 > 0) : ?>
<ul>
    <li>
        <a href="#">Link 1</a>
    </li>
    <li>
        <a href="#">Link 2</a>
    </li>
    <li>
        <a href="#">Link 3</a>
    </li>
</ul>
<?php endif; ?>

<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "Số chẵn: $i ";
    } else{
        echo "Số lẻ: $i ";
    }
}

function isPrime($number){
    if ($number < 2) {
        return false;
    }
    $is_prime = true;
    for ($i = 2; $i < $number; $i++){
        if ($number % $i == 0) {
            $is_prime = false;
            break;
        }
    }
    return $is_prime;
}
?>