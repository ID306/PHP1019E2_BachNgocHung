<meta charset="UTF-8">
<?php
$arr_1 = array (1, "abc", true, null, array());

$arr_2 = [123, "def", false, null,[]];

$string = "Hello 123";
echo $string;

echo $arr_2;

var_dump($arr_2);
echo "<br/>";

echo "<pre>";
print_r($arr_2);
echo "</pre>";

$value = $arr_2[1];
echo $value; //def

echo "<br/>";
//Vòng lặp Foreach
//sử dụng vòng lập For để hiện thị ra các giá trị của 1 mảng
$arr_for = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count_arr_for = count($arr_for);

for($key = 0; $key < count($arr_for); $key++ ) {
    echo $arr_for[$key];
}
echo "<br/>";
//Sử dụng Foreach
foreach ($arr_for As $key => $value) {
    echo "Vị trí $key đang có giá trị là: " . $value;
    echo "<br/>";
}

$name_arr = ['Name 1', 'Name 2', 'Name 3'];
foreach ($name_arr As $name){
    echo "$name <br/>";
}

//Phân loại mảng trong PHP
//1 - Mảng tuần tự - Mảng số nguyên
$arr = [1, 2, 'abc', '456'];
$arr_1 = [
    0 => 123,
    1 => 2,
    3 => "abcdef",
    4 => false,
];
echo "<pre>";
print_r($arr_1);
echo "</pre>";

//2-Mảng kết hợp
//Key có thể ở dạng string
$arr_3 = [
    'Name' => 'Hưng',
    'Age' => 18,
    2 => 'abc',
    'is_male' => true,
];
echo "<pre>";
print_r($arr_3);
echo "</pre>";

echo "Age = " . $arr_3['Age'];
echo "<br/>";
echo "is male = " . $arr_3['is_male'];
echo "<br/>";
echo "Giá trị của phần tử đang có key = 2 là: " . $arr_3[2];
echo "<br/>";

foreach ($arr_3 As $key => $value) {
    echo "Vị trí $key hiện tại đang có giá trị là $value";
    echo "<br/>";
}

//3- Mảng đa chiều
$arr_4 = [
    'name' => 'Hung',
    'age' => [
        0 => 15,
        1 => 24,
    ]
];
echo "<pre>";
print_r($arr_4);
echo "</pre>";
echo "<br/>";

echo $arr_4['age'][1];
echo "<br/>";

foreach ($arr_4 As $key => $value) {
    echo "Vị trí $key hiện tại đang có giá trị là: $value";
    echo "<br/>";
};

$arr_5 = [
    'student'=>[
        'room'=>[
            'id'=>123,
            'floor'=>3
        ],
        'info'=>[
            'name'=>'Hiển',
            'address'=>'Vĩnh Phúc'
        ]
    ],
    'class'=>'php1019e2'
];

echo $arr_5['student']['room']['floor'];
echo "<br/>";
echo $arr_5['student']['info']['address'];
echo "<br/>";
print_r($arr_5['student']['room']);
echo "<br/>";

//Chữa thực hành 1
$arrs = [12, 50, 60, 90, 12, 25, 60];
$sum = 0;
$multiple = 1;
foreach ($arrs AS $value){
    $sum += $value;
    $multiple *= $value;
};
echo "Tổng bằng = $sum";
echo "<br/>";
echo "Tích bằng = $multiple";
echo "<br/>";

?>

<?php
$arr = [1,2,3,4];
echo array_sum($arr);

$arr = [
    'name' => 'Hung',
    'age' => 30
];
var_dump(array_key_exists('name', $arr));
var_dump(array_key_exists('namexxxxxx', $arr));

$arr = ['a','b','c'];
var_dump(array_search('a',$arr));
var_dump(array_search('aaaaaa',$arr));

$arr = [1,3,5,4,3,6,7,8,1,2,5,6,7,8,9];
$arr = array_unique($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

//tính số phần tử
echo count($arr);

//lấy ra phần tử cuối cùng
echo end($arr);



?>