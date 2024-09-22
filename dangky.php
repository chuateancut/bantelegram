<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="color.css">
    <style>
        .body--formdangky {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
           
        }
        
        .form-container {
            background: #fff;
            padding: 20px 40px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input {
            width: 100%;
            padding: 10px 0;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 20px;
            background-color: #76eec6;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #66d5b4;
        }
        .from--login {
            text-decoration: none;
           
        }
        .from--login {
            display: block; /* Đặt thành block để căn chỉnh dễ hơn */
            text-align: right; /* Căn phải nội dung */
            margin: 10px 0; /* Tạo khoảng cách trên */
            color: #007bff; /* Màu cho đường link */
            text-decoration: none; /* Bỏ gạch chân */
        }
    </style>
</head>
<body>
    <div class="menu">
        <div class="header--menu">
            <ul class="ul--menu">
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Nạp Tiền</a></li>
                <li><a href="">Hỗ Trợ</a></li>
                <li><a href="">Lịch Sử Đơn Hàng</a></li>
            </ul>
        </div>
    </div>
    <div class="body--formdangky">
        <div class="form-container">
            <h2>Đăng Ký Tài Khoản</h2>
            <form action="xulydangky.php" method="post">
                <label for="username">Tên Đăng Nhập</label>
                <input type="text" name="username" required>

                <label for="gmail">Email</label>
                <input type="email" name="gmail" required>

                <label for="matkhau">Mật Khẩu</label>
                <input type="password" name="matkhau" required>

                <label for="confirm--password">Nhập Lại Mật Khẩu</label>
                <input type="password" name="confirm--password" required>

                <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matkhau = trim($_POST["matkhau"]);
    $confirmpassword = trim($_POST["confirm--password"]);

    if (empty($matkhau) || empty($confirmpassword)) {
        echo "Các trường mật khẩu không được để trống.";
    } elseif ($matkhau !== $confirmpassword) {
        echo "Mật khẩu không giống nhau.";
    }
}
?>
        
                <a class="from--login" href="dangnhap.php">Đăng Nhập ?</a>

                <button type="submit" name="submit--dangky">Đăng Ký</button>
            </form>
        </div>
    </div>
</body>
</html>
