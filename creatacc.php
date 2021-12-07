<?php  
session_start();
// If the user is not logged in redirect to the login page...
$DATABASE_HOST = 'sql302.epizy.com';
$DATABASE_USER = 'epiz_29652537';
$DATABASE_PASS = 'f1JfvlgLFivYCa';
$DATABASE_NAME = 'epiz_29652537_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$password1 = trim($_POST['password1']);
$email = trim($_POST['email']);
$name1 = trim($_POST['name1']);
$BD = trim($_POST['BD']);
$GT = trim($_POST['GT']);

if (empty($username)) {
array_push($errors, "Username is required"); 
}
if (empty($email)) {
array_push($errors, "Email is required"); 
}
if (empty($password)) {
array_push($errors, "Two password do not match"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM accounts WHERE username = '$username' OR email = '$email'";

//kiểm tra mật khẩu nhập lại
if ($password != $password1) {
    echo '<script language="javascript">alert("Mật khẩu nhập lại không chính xác!"); window.location="register.php";</script>';
    die();
}

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
    echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

    // Dừng chương trình
    die ();
}
else {
$sql = "INSERT INTO accounts (username, password, email, names, birthdate, gender) VALUES ('$username','$password','$email', N'$name1','$BD','$GT')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="index.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên đăng nhập: ".$_POST['username']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
}
}
}

?>