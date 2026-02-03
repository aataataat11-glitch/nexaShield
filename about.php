<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>Nexa Shield </title>
<style>
canvas#bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}
body { background:#0f172a; color:#e5e7eb; font-family:'Cairo', sans-serif; line-height:1.9; }
.logo-bar { background:#111827; padding:10px 50px; display:flex; align-items:center; gap:15px; border-bottom:1px solid #0f172a; direction:ltr; }
.logo-img { width:40px; height:40px; border-radius:50%; border:2px solid #38bdf8; cursor:pointer; transition:0.3s; }
.logo-img:hover { transform:scale(1.1); }
.logo-text { font-size:22px; font-weight:bold; color:#38bdf8; }
.nav { display:flex; gap:22px; margin-left:auto; }
.nav a { color:#cbd5f5; text-decoration:none; font-size:15px; transition:0.3s; }
.nav a:hover { color:#38bdf8; }
.content { padding:50px 60px; }
h1 { color:#38bdf8; margin-bottom:20px; }
p { color:#94a3b8; margin-bottom:15px; }
@media (max-width:768px) { .logo-bar { flex-direction:column; align-items:flex-start; gap:10px; } .nav { margin-left:0; flex-wrap:wrap; gap:15px; } }


</style>
</head>
<body>
<canvas id="bg"></canvas>

<style>

.logo-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #38bdf8;
    cursor: pointer;
    transition: transform 0.3s; /* التكبير سلس */
}

.logo-img:hover {
    transform: scale(1.1); /* تكبير عند المرور */
}

</style>

<div class="logo-bar">
<img src="images/img1.jpg" alt="شعار Nexa Shield" class="logo-img" id="logo">
<span class="logo-text">Nexa Shield</span>
<nav class="nav">
<a href="about.php">Nexa Shield</a>
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
<div id="logoModal" style="
    display:none;
    position:fixed;
    top:0; left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.8);
    justify-content:center;
    align-items:center;
    z-index:9999;
    ">
    <!-- زر الإغلاق -->
    <span id="closeModal" style="
        position:absolute;
        top:20px;
        right:30px;
        font-size:40px;
        color:#ffffff;
        cursor:pointer;
        font-weight:bold;
    ">&times;</span>

    <!-- الصورة المكبرة -->
    <img id="modalImg" style="
        max-width:50%;
        max-height:50%;
        border-radius:20px;
        box-shadow:0 0 30px rgba(56,189,248,0.6);
    ">
</div>

<div class="breadcrumb"></div>

<div class="content">
<h1>من نحن</h1>
<p>Nexa Shield نحن منصة متكاملة تهدف إلى تزويد المستخدم بكل ما يحتاجه في مجال الأمن السيبراني</p>
<p>ويوفّر الموقع دورات تعليمية، وكتب إلكترونية، وملخصات، وأدوات مستخدمة في التخصّص، بالإضافة إلى أخبار وتقارير حديثة عن الهجمات والثغرات.
<br>المنصة مصممة لتسهيل رحلة التعلم، وتمكين المستخدم من تطوير مهاراته في الأمن السيبراني بطريقة منظّمة وواضحة، بدءًا من الأساسيات وانطلاقاً الى افضل المستويات خطوة بخطوة
</p>
</div>

<div class="breadcrumb"></div>
<script>
const canvas = document.getElementById("bg");
const ctx = canvas.getContext("2d");

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);

// خلفية ثنائية خافتة
const chars = "01";
const fontSize = 16;
let columns = Math.floor(canvas.width / fontSize);
let drops = Array(columns).fill(1);

function drawBinary() {
    ctx.fillStyle = "rgba(15, 23, 42, 0.35)"; // نفس لون الخلفية تقريبًا
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
const logo = document.getElementById('logo');
const modal = document.getElementById('logoModal');
const modalImg = document.getElementById('modalImg');
const closeModal = document.getElementById('closeModal');


</script>
<footer style="background:#020617; color:#94a3b8; padding:20px; text-align:center;">
    © 2026 Nexa Shield - جميع الحقوق محفوظة
</footer>

</body>
</html>
