<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>الرئيسية</title>
<style>
* {margin:0; padding:0; box-sizing:border-box; font-family:'Cairo',sans-serif;}
body {background:#0f172a; color:#e5e7eb; line-height:1.8;}
.logo-bar {display:flex; align-items:center; gap:15px; padding:10px 50px; background:#111827; border-bottom:1px solid #0f172a; direction:ltr;}
.logo-img {width:40px; height:40px; border-radius:50%; border:2px solid #38bdf8; cursor:pointer; transition:0.3s;}
.logo-img:hover {transform:scale(1.1);}
.logo-text {font-size:20px; font-weight:bold; color:#4cbdee;}
.nav {display:flex; gap:22px; margin-left:auto;}
.nav a {color:#cbd5f5; text-decoration:none; font-size:15px; transition:0.3s;}
.nav a:hover {color:#38bdf8;}
.hero {text-align:center; padding:100px 20px;}
.hero h1 {font-size:40px; background:linear-gradient(to left,#38bdf8,#22c55e); -webkit-background-clip:text; -webkit-text-fill-color:transparent; margin-bottom:20px;}
.hero p {color:#94a3b8; font-size:18px; max-width:600px; margin:auto; margin-bottom:35px;}
.cards {display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:25px; padding:40px 60px;}
.card {display:flex; flex-direction:column; justify-content:center; align-items:center; padding:30px; border-radius:14px; text-align:center; background:linear-gradient(180deg,#111827,#020617); border:1px solid #0f172a; color:#e5e7eb; text-decoration:none; transition:0.4s; position:relative;}
.card:hover {transform:translateY(-8px); border-color:#38bdf8; box-shadow:0 0 20px rgba(56,189,248,0.3);}
.card h3 {margin-bottom:12px; font-size:20px;}
.card p {color:#94a3b8; font-size:15px;}
.footer {background:#020617; text-align:center; padding:18px; margin-top:50px; font-size:14px; color:#94a3b8; border-top:1px solid #0f172a;}
.modal {display:none; position:fixed; z-index:1000; padding-top:60px; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.8);}
.modal-content {margin:auto; display:block; width:300px; max-width:90%; border-radius:10px; animation:zoom 0.3s;}
@keyframes zoom {from {transform:scale(0.5);} to {transform:scale(1);}}
.close {position:absolute; top:20px; right:35px; color:#fff; font-size:40px; font-weight:bold; cursor:pointer; transition:0.3s;}
.close:hover {color:#38bdf8;}
@media (max-width:768px) { .logo-bar {flex-direction:column; align-items:flex-start; gap:10px; direction:ltr;} .nav {margin-left:0; flex-wrap:wrap; gap:15px;} .hero h1 {font-size:30px;} }

</style>
</head>
<body>
 <canvas id="bg"></canvas>   

<style>
canvas#bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}
</style>

<!-- Logo Bar -->
<div class="logo-bar">
    <img src="images/img1.jpg" alt="شعار Nexa Shield" class="logo-img" id="logo">
    <span class="logo-text">Nexa Shield</span>
    <nav class="nav">
        <a href="about.php">Nexa Shield</a>
        <a href="tools.php">الادوات</a>
        <a href="vulnerabilities.php">الثغرات</a>
        <a href="tests.php">الاختبارات</a>
        <a href="courses.php">الدورات</a>
        <a href="materials.php">المواد</a>
        <a href="books.php">الكتب</a>
        <a href="index.php">الرئيسية</a>
        <a href="welcome.php">بداية الرحلة</a>
    </nav>
</div>

<!-- Hero Section -->
<section class="hero">
    <h1>تعلم الأمن السيبراني بطريقة ذكية</h1>
    <p>ملخصات جامعية، أخبار الثغرات الأمنية، وكتب PDF متخصصة</p>
</section>

<!-- Cards Section -->
<section class="cards">
    <a href="materials.php" class="card">
        <h3>📘 المواد الجامعية</h3>
        <p>ملخصات مبسطة لمواد الأمن السيبراني</p>
    </a>
    <a href="vulnerabilities.php" class="card">
        <h3>🐞 الثغرات الأمنية</h3>
        <p>شرح أحدث الثغرات وتأثيرها</p>
    </a>
    <a href="books.php" class="card">
        <h3>📚 الكتب وملخصات PDF</h3>
        <p>مصادر تعليمية للمبتدئين والمتقدمين</p>
    </a>
    <a href="about.php" class="card">
        <h3>Nexa Shield</h3>
        <p>تعرف على فريق Nexa Shield</p>
    </a>
</section>

<!-- Footer -->
<footer class="footer">
    <p>© 2026 Nexa Shield - جميع الحقوق محفوظة</p>
</footer>

<script>
const canvas = document.getElementById("bg");
const ctx = canvas.getContext("2d");

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);

const chars = "01";
const fontSize = 16;
let columns = Math.floor(canvas.width / fontSize);
let drops = Array(columns).fill(1);

function drawBinary() {
    ctx.fillStyle = "rgba(15, 23, 42, 0.35)"; 
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.font = fontSize + "px monospace";
    ctx.fillStyle = "rgba(56, 189, 248, 0.15)"; // خافت جدًا

    for (let i = 0; i < drops.length; i++) {
        const text = chars[Math.floor(Math.random() * chars.length)];
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);

        if (drops[i] * fontSize > canvas.height && Math.random() > 0.98) {
            drops[i] = 0;
        }
        drops[i]++;
    }
}

setInterval(drawBinary, 80);
</script>

</body>
</html>

