<meta charset="UTF-8">
<?php

 //Chữa bài tập 1
    /**
     * @param $arr
     * @param $operator
     * @return string
     */
function calculate($arrs, $operator){
//    $arr=[2,5,6,9,2,5,6,12,5];
    $string ='';
    switch ($operator){
        case '+':
            $result = 0;
            $string = "Tổng các phần tử = ";
            foreach ($arrs AS $key => $value){
                $result+=$value;
                $string.= "$value + ";
            }
            break;

        case '-':
            $result = $arrs[0];
            $string = "Hiệu các phần tử = ";
            foreach ($arrs AS $key => $value){
                $string.="$value + ";
                if ($key==0) {
                    continue;
                }
                $result -= $value;
            }
             break;
        case '*':
            $result = 1;
            $string = "Tích các phần tử = ";
            foreach ($arrs AS $value){
                $result *= $value;
                $string .= "$value * ";
            }
            break;
        case '/':
            $result = $arrs[0];
            $string = "Thương các phần tử = ";
            foreach ($arrs as $key => $value) {
                if ($value == 0){
                    continue;
                }
                $string .= "$value / ";
                if ($key == 0) {
                    continue;
                }
                $result /= $value;
            }
            break;
    }
    $string = substr($string, 0, -2);
    $string .= " = $result";
    $string .= "<br/>";
    return $string;
}
$arrs =[2,5,6,9,2,5,6,12,5];
//gọi hàm
echo calculate($arrs, '+');
echo calculate($arrs, '-');
echo calculate($arrs, '*');
echo calculate($arrs, '/');

$arr2 = [1,0,5];
echo calculate($arr2, '/');

//Chữa bài 6
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$keysAndValue = array_combine($keys, $values);
echo "<pre>";
print_r($keysAndValue);
echo "</pre>";


//Chữa bài 7
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100,  -125, 0];
foreach ($array AS $value){
    if ($value >= 100 && $value <= 200 && $value%5 == 0 ){
        echo $value . " ";
    }
}
echo "<br/>";
//Chữa bài 8
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
 //8.1 Tìm chuỗi có độ dài lớn nhất

$max = 0;
$str_max = "";

foreach ($array AS $string){
    $str_length = strlen ($string);
    if ($str_length > 0){
        $max = $str_length;
        $str_max = $string;
    }
}
echo "Chuỗi lớn nhất là $str_max, độ dài: $str_length";
echo "<br/>";

//Chữa bài 9
$arrs = ['1', 'B', 'C', 'E'];
function convertArrToLower ($arrs){
    $arr_result = [];
    foreach ($arrs AS $value){
        $value_lower = strtolower ($value);
        $arr_result [] = $value_lower;
    }
    return $arr_result;
}
echo "<pre>";
print_r(convertArrToLower($arrs));
echo "</pre>";