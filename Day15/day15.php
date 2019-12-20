<meta charset="UTF-8">
<?php
$error = '';
$result = '';
if (isset($_POST['submit'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        $error = "Username hoặc Password không được để trống";
    } else if (strlen($password) < 3){
        $error = "Password không được nhỏ hơn 3 ký tự";
    } else {
        if ($username == 'admin' && $password == 'admin'){
            $result = "Đăng nhập thành công";
        } else {
            $error = "Sai tài khoản hoặc password";
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

<form action="" method = "post">
    Usermane:
    <input type="text" name="username"
           value="<?php echo isset($_POST['username'])? $_POST['username']: '' ?>">
    <br/>
    Password:
    <input type="password" name="password">
    <br/>
    <input type="submit" value="Login" name="submit">

</form>