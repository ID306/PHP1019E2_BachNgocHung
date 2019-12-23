<?php
$error = '';
$result = '';
if (isset($_POST['submit'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date_time = $_POST['date_time'];
    $class_detail = $_POST['class_detail'];
    $gender = $_POST['gender'];

    if (empty($name)){
        $error = "Name không được để trống";
    } else if (empty($email)){
        $error = "Email không được để trống";
    } else if (!filter_var($email, FILTER_VAL0IDATE_EMAIL)){
        $error = "Email chưa đúng định dang";
    } else if(empty($class_detail) && empty($date_time)){
        $error = "Class detail và Specific Time không được để trống";
    } else if(!isset($_POST['gender'])){
        $error = "Cần phải chọn Gender";
    } else {
        $result .= "Your given details are as: <br/>";
        $result .= "Name: $name <br/>";
        $result .= "Email: $email <br/>";
        $result .= "Specific Time: $date_time <br/>";
        $result .= "Class details: $class_detail <br/>";

        $gender = $_POST['gender'];
        $gender_text = '';
        switch ($gender){
            case 0: $gender_text = 'Female';break;
            case 1: $gender_text = 'Male';break;
        }

    }
}
?>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<h3 style="color: green">
     <?php echo $result; ?>
</h3>
<meta charset="utf-8">
<form action="" method="post";
<table border="0">
    <tr>
        <td colspan="2">Tutorial</td>
    </tr>
    <br/>
    <tr>
        <td>Name:</td>
        <td>
            <input type="text" name="name"
                   value="<?php echo isset($_POST['name']) ? $_POST['name']: ""?>"/>
        </td>
    </tr>
    <br/>
    <tr>
        <td>Email:</td>
        <td>
            <input type="text" name="email"
                   value="<?php echo isset($_POST['email']) ? $_POST['email']: ""?>">
        </td>
    </tr>
    <br/>
    <tr>
        <td>Specific Time:</td>
        <td>
            <input type="date" name="date_time"
                   value="<?php echo isset($_POST['date_time']) ? $_POST['date_time']: ""?>">
        </td>
    </tr>
    <br/>
    <tr>
        <td>Class details:</td>
        <td>
            <textarea name="class_detail"><?php echo isset($_POST['class_detail']) ? $_POST['class_detail']: ""?></textarea>
        </td>
    </tr>
    <br/>
    <tr>
        <?php
            $checked_female = '';
            $checked_male = '';
            if (isset($_POST['gender'])){
                $gender = $_POST['gender'];
                switch ($gender){
                    case 0: $checked_female = "checked=true";break;
                    case 1: $checked_male = "checked=true";break;
                }
            }
        ?>
        <td>Gender:</td>
        <td>
            <input <?php echo $checked_female ?> type="radio" name="gender" value="0">Female
            <input <?php echo $checked_male ?> type="radio" name="gender" value="1">Male
        </td>
    </tr>
    <br/>
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="submit">
        </td>
    </tr>
</table>
<?php
//Bài tập 1
