<?php
function displayNumber($number) {
    $string = '';
    for($i = 1; $i <= $number; $i++){
        $string .= $i;
        if ($i == $number) {
            break;
        }
        $string .= "-";
    }
    return $string;
}
$display50 = displayNumber (50);
echo $display50;

echo "<br/>";

//BT5
function displaySum($number) {
    $string = "S($number)=";
    $sum = 0;
    for($i = 1; $i <= $number; $i++){
        $sum += 1/$i;
        $string .= "1/$i";
        if ($i == $number) {
            break;
        }
        $string .= "+";
    }
    $string .= "=" . $sum;
    return $string;
}
$display10 = displaySum (10);
echo $display10;
?>

<!--//Chữa Bài 11-->
<style>
    .green {
        background: green;
    }
</style>
<?php
    function isPrime($number){
        $is_prime = true;
        if ($number < 2) {
            $is_prime = false;
        } else{
          for ($i = 2; $i <= sqrt($number); $i++){
              if($number % $i == 0){
                  $is_prime = false;
                  break;
              }
          }
        }
        return $is_prime;
    }
?>
<table border="1" cellpadding="10" cellspacing="0">
<?php for($row = 1; $row <= 10; $row++): ?>
<tr>
    <?php for($col = 1; $col <= 10; $col++):
        $number = ($row -1)*10 + $col;
        $class = '';
        if (isPrime($number) == TRUE){
            $class = "class='green'";
        }
        ?>
        <td <?php echo $class; ?> >
            <?php
            echo $number;
            ?>
        </td>
    <?php endfor; ?>
</tr>
<?php endfor; ?>
</table>
