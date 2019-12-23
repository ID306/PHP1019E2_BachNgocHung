<meta charset="UTF-8">
<?php
$error = '';
$result = '';
if (isset($_POST['submit'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //khi thao tác với file, sử dụng biến $_FILES để xử lý
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $name = $_POST['name'];
    if (empty($name)){
        $error = "Name không được để trống";
    } else {

        $avatar_arr = $_FILES['avatar'];
        if($avatar_arr['error'] != 0){
            $error = "Không thể upload file";
        } else{
            $extension = pathinfo($avatar_arr['name'], PATHINFO_EXTENSION);
//            print_r($extension);
//            die;
            $size = $avatar_arr['size'] / 1024 / 1024;

            $arr_extension = ['png', 'jpg', 'jpeg', 'gif'];
            if(in_array($extension, $arr_extension) ==FALSE){
                $error = "Cần upload file dạng ảnh";
            } else if ($size > 0.5){
                $error = "Chỉ có thể upload dung lượng nhỏ hơn 512KB";
            } else {

            }

            //tạo 1 thư mục để lưu file vừa upload
            //phải sử dụng đường dẫn vật lý để lưu file
            $dir_upload = __DIR__ ."/upload";
//            print_r($dir_upload);
            //kiểm tra nếu chưa tồn tại thư mục uploads thì sẽ tạo mới bằng code
            if (file_exists($dir_upload) == FALSE){
                mkdir($dir_upload);
            }
            //chuyển file từ thư mục tạm sang thư mục upload
            $file_name = time().$avatar_arr['name'];
            $tmp_name = $avatar_arr['tmp_name'];
            $destination = $dir_upload . '/' . $file_name;
            $is_upload = move_uploaded_file($tmp_name, $destination);
            if ($is_upload){
                $result = "Upload file thành công";
            } else {
                $error = "Không thể upload file";
            }
        }
    }
}
?>
<h3 style="color: red">
    <?php echo $error;?>
</h3>
<h3 style="color: green">
    <?php echo $result;?>
</h3>
<form action="" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" value="">
    <br/>
    Upload avatar
    <input type="file" name="avatar">
    <br/>
    <input type="submit" name="submit" value="submit">
</form>

