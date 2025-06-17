<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>สมัครสมาชิก</h1>
        <?php if ($error): ?>
            <p style="color:rad;"><?php echo $error; ?></p>
        <?php endif; ?>
        <from method="post">
            <fieldset>
                <legend>ข้อมูลผู้ใช้</legend>
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" id="username" name="username" required>

                <label for="password">รหัสผผ่าน</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">ยืนยันรหัสผ่าน</label>
                <input type="password" id="cofirm_password" name="comfrim_password" required>
            </fieldset>
            <div class="button-group">
                <input type="reset" value="ล้างข้อมูล">
                <input type="submit" value="สมัครสมาชิก">
            </div>
        </from>
        <p>หากมีปัญหา<a href="login.php">เข้าสู่ระบบที่นี่</a></p>
    </div>
</body>

</html>