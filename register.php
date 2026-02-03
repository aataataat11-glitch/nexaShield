<?php
include "db.php";

$course = $_GET['course'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $course = $_POST['course'];

    $stmt = $conn->prepare(
        "INSERT INTO registrations (name,email,course) VALUES (?,?,?)"
    );
    $stmt->bind_param("sss", $name, $email, $course);
    $stmt->execute();
    ?>
    <!DOCTYPE html>
    <html lang="ar" dir="rtl">
    <body style="background:#0f172a;color:#e5e7eb;font-family:Cairo;text-align:center;padding:60px">
        <h2>✅ تم تسجيلك بنجاح</h2>
        <p>سيتم التواصل معك لاحقًا</p>
        <a href="courses.php" style="color:#38bdf8">العودة للدورات</a>
    </body>
    </html>
    <?php
    exit;
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>تسجيل</title>
<style>
body{
    background:#0f172a;
    font-family:Cairo;
    color:#e5e7eb;
    padding:40px;
}
form{
    background:#111827;
    padding:30px;
    border-radius:14px;
    max-width:400px;
}
input,button{
    width:100%;
    margin-bottom:12px;
    padding:10px;
}
button{
    background:#38bdf8;
    border:none;
}
</style>
</head>
<body>

<form method="POST">
    <h3>التسجيل في دورة: <?= htmlspecialchars($course) ?></h3>
    <input type="text" name="name" placeholder="اسمك" required>
    <input type="email" name="email" placeholder="بريدك" required>
    <input type="hidden" name="course" value="<?= htmlspecialchars($course) ?>">
    <button>إرسال</button>
</form>

</body>
</html>
