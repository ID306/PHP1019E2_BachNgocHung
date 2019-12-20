<meta charset="UTF-8">
<?php
if (isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if (isset($_POST['gender'])){

    }
    if (isset($_POST['jobs'])){

    }
}
?>
<form action ="" method="post">
    Name:
    <input type="text" name="name" value="">
    <br/>
    Gender:
    <input type="radio" name="gender" value="1">Name
    <input type="radio" name="gender" value="2">Nữ
    <input type="radio" name="gender" value="3">Khác
    <br/>
    Country:
    <select name="country">
        <option value="1">Việt Nam</option>
        <option value="2">Nhật Bản</option>
        <option value="3">Hàn Quốc</option>
    </select>
    <br/>
    Jobs:
    <input type="checkbox" name="jobs[]" value="1">Developer
    <input type="checkbox" name="jobs[]" value="2">Tester
    <input type="checkbox" name="jobs[]" value="3">Run
    <br/>
    Info:
    <textarea name="info"></textarea>
    <br/>
    <input type="submit" name="submit" value="submit">
</form>

<style type="text/css">
    textarea {
        resize: none;
    }
</style>