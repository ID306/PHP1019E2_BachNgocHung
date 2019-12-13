<?php
//BT 1
$variable1 =  '1.23';
$variable2 = 28;
$variable3 = 'null';
$variable4 = [
    123,
    false,
    null,
    1.23,
    FALSE,
    [],
    TRUE,
];
$variable5 = (float)-123;
$variable6 =  'false';
$variable7 = 'php39';
?>
<!--//BT 2-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chữa BT</title>
    </head>
    <body>
    Today I \'ll learn PHP - "Variable"
    <br/>
    This is a bad command : del c:\*.*

<!--    Hiện thị bằng javacript-->
    <div id="result"></div>
    <script type="text/javascript">
        var text = 'Today I \\\'ll learn PHP - "Variable"';
        text += "<br/>";
        text += 'This is a bad command : del c:\\*.*';
        document.getElementById('result').innerHTML = text;
    </script>
<!--    Hiển thị mới PHP-->
    <?php
    $text = 'Today I \\\'ll learn PHP - "Variable"';
    $text .= "<br/>";
    $text .= 'This is a bad command : del c:\*.*';
    echo $text;
    echo "<br/>";
    //BT 3
    $variable1 = 'abc123';

    $variable1_int = (int) $variable1;
    var_dump($variable1_int);

    $variable1_float = (float) $variable1;
    var_dump($variable1_float);

    $variable1_string = (string) $variable1;
    var_dump($variable1_string);

    $variable1_boolean = (boolean) $variable1;
    var_dump($variable1_boolean);

    ?>

    </body>
</html>