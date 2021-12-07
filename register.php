<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng ký tài khoản</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style=" background: linear-gradient( 45deg , #b128ff, #25d0fd); ">
			<div class="wrap-login100">
				<form method="post" action="register.php" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Đăng Ký
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "yêu cầu nhập họ và tên">
						<input class="input100" type="text" name="name1">
						<span class="focus-input100" data-placeholder="Họ và tên"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "yêu cầu nhập ngày sinh">
						<input class="input100" type="text" name="BD">
						<span class="focus-input100" data-placeholder="Ngày sinh"></span>
					</div>

                    <select name="GT" class="wrap-input100 validate-input" data-validate = "yêu cầu chọn giới tính" style=" height: 33px; margin-top: 12px; border: none;border-bottom: 2px solid #adadad; ">
                        <option value="none" selected disabled hidden >
                            <p style=" color: #ffff; ">Giới tính</p>
                        </option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>
                    </select>
                    

					<div class="wrap-input100 validate-input" data-validate = "yêu cầu nhập tên đăng nhập">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Tên đăng nhập"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="yêu cầu nhập mật khẩu">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Mật khẩu"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="yêu cầu nhập lại mật khẩu">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password1">
						<span class="focus-input100" data-placeholder="Nhập lại mật khẩu"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="email không hợp lệ">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="email"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="dangky" class="login100-form-btn">
								Đăng ký
							</button>
						</div>
					</div>
					<?php require 'creatacc.php';?>
                    <div class="text-center p-t-115">
						<span class="txt1">
							Bạn đã có tài khoản?
						</span>

						<a class="txt2" href="http://phanchau.ml/login.php">
							Đăng nhập
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>