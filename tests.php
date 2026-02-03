<?php
include "db.php";
$result = $conn->query("SELECT * FROM tests ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>اختبارات تحديد المستوى</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Cairo',sans-serif;
}

body{
    background:#0f172a;
    color:#e5e7eb;
    line-height:1.8;
}

.logo-bar{
    display:flex;
    align-items:center;
    justify-content:flex-start;
    padding:15px 40px;
    background:#020617;
    border-bottom:1px solid #1e293b;
}

.logo-img{
    width:45px;
    height:45px;
    border-radius:50%;
}

.logo-text{
    color:#38bdf8;
    font-size:20px;
    font-weight:bold;
    margin-right:10px;
}

.nav a{
    color:#e5e7eb;
    margin:0 10px;
    text-decoration:none;
    font-size:14px;
}

.nav a:hover{
    color:#38bdf8;
}

.page-title{
    text-align:center;
    margin:30px 0;
    color:#38bdf8;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
    padding:40px;
}

.card{
    background:#020617;
    border-radius:16px;
    padding:25px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.3);
}

.card h3{
    color:#38bdf8;
    margin-bottom:10px;
}

.card p{
    color:#94a3b8;
    font-size:14px;
    margin-bottom:10px;
}

.card button{
    padding:10px 18px;
    border:none;
    border-radius:8px;
    background:#38bdf8;
    color:#fff;
    cursor:pointer;
}

.card button:hover{
    background:#22c55e;
}
</style>

</head>

<body>

<div class="logo-bar">
    <div style="display:flex;align-items:center;">
        <img src="images/img1.jpg" alt="شعار Nexa Shield" class="logo-img">
        <span class="logo-text">Nexa Shield</span>
    </div>

    <nav class="nav">
        <a href="about.php">Nexa Shield</a>
        <a href="tools.php">الأدوات</a>
        <a href="vulnerabilities.php">الثغرات</a>
        <a href="tests.php">الاختبارات</a>
        <a href="courses.php">الدورات</a>
        <a href="materials.php">المواد</a>
        <a href="books.php">الكتب</a>
        <a href="index.php">الرئيسية</a>
        <a href="welcome.php">بداية الرحلة</a>
    </nav>
</div>

<h1 class="page-title">اختبارات تحديد المستوى</h1>

<section class="cards">

<?php while($row = $result->fetch_assoc()): ?>
<div class="card">
    <h3><?= htmlspecialchars($row['title']) ?></h3>
    <p><?= htmlspecialchars($row['test_date']) ?></p>
    <p><?= htmlspecialchars($row['test_day']) ?></p>

    <button onclick="location.href='test_register.php?test=<?= urlencode($row['title']) ?>'">
        سجل في الاختبار
    </button>
</div>
<?php endwhile; ?>

</section>

</body>
</html>


