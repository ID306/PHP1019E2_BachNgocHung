function HandleSubmit(){
	//khai biến chứa thông tin lỗi và thành công tương ứng
	var error ='';
	var result ='';

	//lấy ra các đối tượng với từng input trong form
	var obj_name = document.getElementById('name');
	var name = obj_name.value;

	var obj_address = document.getElementById('address');
	var address = obj_address.value;

	var obj_zip_code = document.getElementById('zip_code');
	var zip_code = obj_zip_code.value;

	var obj_country = document.getElementById('conntry');
	var conntry = obj_country.value;

	var obj_gender_male = document.getElementById('gender_male');
	var gender_male = obj_gender_male.value;

	var obj_gender_female = document.getElementById('gender_female');
	var gender_female = obj_gender_female.value;

	var obj_checkbox_red = document.getElementById('checkbox_red');
	var checkbox_red = obj_checkbox_red.value;

	var obj_checkbox_green = document.getElementById('checkbox_green');
	var checkbox_green = obj_checkbox_green.value;

	var obj_checkbox_blue = document.getElementById('checkbox_blue');
	var checkbox_blue = obj_checkbox_blue.value;

	var obj_phone = document.getElementById('phone');
	var phone = obj_phone.value;

	var obj_email = document.getElementById('email');
	var email = obj_email.value;

	var obj_password = document.getElementById('password');
	var password = obj_password.value;

	var obj_verify_password = document.getElementById('verify_password');
	var verify_password = obj_verify_password.value;

	//validate
	if(name ===''){
		error = 'Name không được để trống';
		obj_name.focus();
	}

	//Hiện thị thông báo lỗi hoặc thông báo thành công
	var obj_error = document.getElementById('error');
	obj_error.innerHTML = error;

	var obj_result = document.getElementById('result');
	obj_result.innerHTML = result;
	//ngăn ngừa tải lại trang
	return false;

}