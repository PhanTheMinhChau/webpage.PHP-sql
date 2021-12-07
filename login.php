<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
}
else {
    echo '<script>alert("Bạn đang đăng nhập trên thiết bị này! Vui lòng đăng xuất trước khi đăng nhập bằng tài khoản khác");
                    window.location.href = "index.php";
          </script>';
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4749688870108433"
     crossorigin="anonymous"></script>
	<div class="limiter">
		<div class="container-login100" style=" background: linear-gradient( 45deg , #b128ff, #25d0fd); ">
                                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4749688870108433"
                                                crossorigin="anonymous"></script>
                                            <!-- login -->
                                            <ins class="adsbygoogle"
                                                style="display:block"
                                                data-ad-client="ca-pub-4749688870108433"
                                                data-ad-slot="3272409567"
                                                data-ad-format="auto"
                                                data-full-width-responsive="true"></ins>
                                            <script>
                                                (adsbygoogle = window.adsbygoogle || []).push({});
                                            </script>
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="authenticate.php" method="post">
					<span class="login100-form-title p-b-26">
						Đăng nhập
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="username" id="username" required>
						<span class="focus-input100" data-placeholder="Tên đăng nhập"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password" required>
						<span class="focus-input100" data-placeholder="Mật khẩu"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								đăng nhập
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Bạn chưa có tài khoản?
						</span>

						<a class="txt2" href="http://phanchau.ml/register.php">
							Đăng ký
						</a>
					</div>
				</form>
			</div>
                                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4749688870108433"
                                            crossorigin="anonymous"></script>
                                        <!-- login -->
                                        <ins class="adsbygoogle"
                                            style="display:block"
                                            data-ad-client="ca-pub-4749688870108433"
                                            data-ad-slot="3272409567"
                                            data-ad-format="auto"
                                            data-full-width-responsive="true"></ins>
                                        <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>