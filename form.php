</html>
<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $surname = test_input($_POST["surname"]);
        $name = test_input($_POST["name"]);
        $sdt_email = test_input($_POST["sdt_email"]);
        $password = test_input($_POST["password"]);
        $year = test_input($_POST["year"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h1>ĐĂNG KÍ</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="surname" placeholder="Họ">
        <input type="text" name="name" placeholder="Tên"><br><br>
        <input type="text" name="sdt_email" placeholder="Số điện thoại hoặc email"><br><br>
        <input type="password" name="password" placeholder="Mật khẩu mới"><br></br>
        NGÀY SINH<br><br>
        <input type="date" name="year"><br></br>
        <input type="radio" name="gender" value="female">Nam
        <input type="radio" name="gender" value="male">Nữ
        <input type="radio" name="gender" value="other">Tùy chỉnh
        <br><br>
        <input type="submit" name="submit" value="ĐĂNG KÍ">
    </form>

    <?php
    echo "<h3>HIỂN THỊ NỘI DUNG ĐĂNG KÍ</h3>";
    echo ('Họ:' . $surname);
    echo "<br>";
    echo ('Tên:' . $name);
    echo "<br>";
    echo ('Số điện thoại hoặc email:' . $sdt_email);
    echo "<br>";
    echo ('Mật khẩu mới:' . $password);
    echo "<br>";
    echo ('Ngày/Tháng/Năm sinh:' . $year);
    echo "<br>";
    echo ('Giới tính:' . $gender);
    ?>

</body>

</html>