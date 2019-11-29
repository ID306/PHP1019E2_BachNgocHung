$(document).ready(function(){
	//code js
	$('#form-bt1').submit(function(event){
		var error = '';
		var result = '';

		event.preventDefault();
		//alert("submit");
		//lấy giá trị của 2 số vừa nhập
		var number1 = $('#number1').val();
		var number2 = $('#number2').val();
		
		//check validate trường hợp để trống
		if (number1 ==''){
			error = "Không được bỏ trống Chiều Dài";
			$('number1').focus();
		}
		else if (number2 ==''){
			error = "Không được bỏ trống Chiều Rộng";
			$('number2').focus();
		} else{
			number1 = parseInt(number1);
			number2 = parseInt(number2);
			var p = (number1 + number2) * 2;
			var s = number1 * number2;
			result = "Chu vi = " + p + "m" + "<br>";
			result += "Diện tích = " + s + "m<sup>2</sup>";
		}

		//cần xóa phần tử chứa class error và result nếu có
		$('.error').remove();
		$('.result').remove();
		//đổ dữ liệu ra
		$('#form-bt1').append("<h4 class = 'error'>"+ error + "</h4>");
		$('#form-bt1').append("<h4 class = 'result'>"+ result + "</h4>");
	});
})