<?php
include "db.php";
$result = $conn->query("SELECT * FROM courses ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>الدورات</title>
<style>
* {margin:0; padding:0; box-sizing:border-box; font-family:'Cairo',sans-serif;}
body {background:#0f172a; color:#e5e7eb; line-height:1.8; overflow-x:hidden;}
.logo-bar {display:flex; align-items:center; gap:15px; padding:10px 50px; background:#111827; border-bottom:1px solid #0f172a; direction:ltr;}
.logo-img {width:40px; height:40px; border-radius:50%; border:2px solid #38bdf8; cursor:pointer; transition:0.3s;}
.logo-img:hover {transform:scale(1.1);}
.logo-text {font-size:20px; font-weight:bold; color:#4cbdee;}
.nav {display:flex; gap:22px; margin-left:auto;}
.nav a {color:#cbd5f5; text-decoration:none; font-size:15px; transition:0.3s;}
.nav a:hover {color:#38bdf8;}
.hero {text-align:center; padding:80px 20px;}
.hero h1 {font-size:36px; background:linear-gradient(to left,#38bdf8,#22c55e); -webkit-background-clip:text; -webkit-text-fill-color:transparent; margin-bottom:20px;}
.hero p {color:#94a3b8; font-size:18px; max-width:600px; margin:auto; margin-bottom:35px;}
.cards {display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:25px; padding:10px 60px;}
.card {display:flex; flex-direction:column; justify-content:flex-start; align-items:center; padding:25px; border-radius:14px; text-align:center; background:linear-gradient(180deg,#111827,#020617); border:1px solid #0f172a; color:#e5e7eb; text-decoration:none; transition:0.4s; position:relative;}
.card:hover {transform:translateY(-8px); border-color:#38bdf8; box-shadow:0 0 20px rgba(56,189,248,0.3);}
.card img {width:100%; height:150px; object-fit:cover; border-radius:10px; margin-bottom:15px;}
.card h3 {margin-bottom:8px; font-size:20px; background:linear-gradient(to left,#38bdf8,#22c55e); -webkit-background-clip:text; -webkit-text-fill-color:transparent;}
.card p {color:#94a3b8; font-size:14px; margin-bottom:10px;}
.card .details {font-size:13px; color:#a1a1aa; margin-bottom:15px;}
.card button {padding:8px 15px; border:none; border-radius:8px; background:#38bdf8; color:#fff; font-size:14px; cursor:pointer; transition:0.3s;}
.card button:hover {background:#22c55e;}
.footer {background:#020617; text-align:center; padding:18px; margin-top:50px; font-size:14px; color:#94a3b8; border-top:1px solid #0f172a;}
@media (max-width:768px) { .logo-bar {flex-direction:column; align-items:flex-start; gap:10px; direction:ltr;} .nav {margin-left:0; flex-wrap:wrap; gap:15px;} .hero h1 {font-size:28px;} .cards {padding:30px 20px;} }
canvas#bg {position: fixed; top: 0; left: 0; z-index: -1;}
</style>
</head>
<body>

<canvas id="bg"></canvas>

<!-- Logo Bar -->
<div class="logo-bar">
    <img src="images\img1.jpg" alt="شعار Nexa Shield" class="logo-img" id="logo">
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

<section class="hero">
    <h1>الدورات التعليمية</h1>
    <p>تعلم الأمن السيبراني من خلال دورات منظمة للمبتدئين والمتقدمين مع تفاصيل كاملة لكل دورة.</p>
</section>
<section class="cards">
<?php while($row=$result->fetch_assoc()): ?>
<div class="card">
<img src="images/<?= $row['image'] ?>">
<h3><?= $row['title'] ?></h3>
<p><?= $row['description'] ?></p>
<div class="details">
<?= $row['level'] ?> | <?= $row['duration'] ?>
<button
    onclick="location.href='register.php?course=<?= urlencode($row['title']) ?>'">
    سجّل في هذه الدورة
</button>

</div>
</div>
<?php endwhile; ?>
</section>

<!-- Courses Section -->
<section class="cards">
    <div class="card">
        <img src="images\c1.jpg" alt="أساسيات الأمن السيبراني">
        <h3> أساسيات الأمن السيبراني</h3>
        <p>دورة للمبتدئين لتعلم المفاهيم الأساسية للأمن السيبراني.</p>
        <div class="details">المستوى: مبتدئ | المدة: 4 أسابيع</div>
    <button onclick="location.href='register.php?course=أساسيات الأمن السيبراني'">
      سجل في هذه الدورة
  </button>
    </div>
    <div class="card">
        <img src="images\t2.jpg" alt="اختبار الاختراق">
        <h3> اختبار الاختراق</h3>
        <p>تعلم كيفية تحليل الأنظمة واكتشاف الثغرات بطريقة آمنة.</p>
        <div class="details">المستوى: مبتدئ | المدة: 6 أسابيع</div>
     <button onclick="location.href='register.php?course=اختبار الاختراق '">
سجل في هذه الدورة
</button>
    </div>
    <div class="card">
        <img src="images\e3.jpg" alt="تشفير وحماية البيانات">
        <h3> تشفير وحماية البيانات</h3>
        <p>دورة متقدمة حول تقنيات التشفير وأساليب حماية المعلومات.</p>
        <div class="details">المستوى: مبتدئ | المدة: 5 أسابيع</div>
       <button onclick="location.href='register.php?course=تشفير وحماية البيانات '">
سجل في هذه الدورة
</button>
    </div>
    <div class="card">
        <img src="images\n1.webp" alt="أمن الشبكات">
        <h3> أمن الشبكات</h3>
        <p>تعلم كيفية حماية الشبكات من الاختراقات والهجمات الشائعة.</p>
        <div class="details">المستوى: مبتدئ | المدة: 4 أسابيع</div>
      <button onclick="location.href='register.php?course=أمن الشبكات '">
سجل في هذه الدورة
</button>
    </div>
    <div class="card">
    <img src="images\5.jpg" alt="أمن تطبيقات الويب">
    <h3> أمن تطبيقات الويب</h3>
    <p>تعلم حماية مواقع الويب من الهجمات والثغرات الشائعة.</p>
    <div class="details">المستوى: مبتدئ | المدة: 5 أسابيع</div>
  <button onclick="location.href='register.php?course=أمن تطبيقات الويب'">
سجل في هذه الدورة
</button>
</div>

<div class="card">
    <img src="images\6.jpg" alt="لينكس للأمن السيبراني">
    <h3> لينكس للأمن السيبراني</h3>
    <p>تعلم أوامر لينكس الأساسية المستخدمة في مجال الأمن.</p>
    <div class="details">المستوى: مبتدئ | المدة: 4 أسابيع</div>
   <button onclick="location.href='register.php?course=لينكس للأمن السيبراني'">
سجل في هذه الدورة
</button> 
</div>

<div class="card">
    <img src="images\7.jpg" alt="تنظيم الحاسوب">
    <h3> تنظيم الحاسوب</h3>
    <p>تعرف على مكونات الحاسوب الداخلية وكيفية تفاعل المعالج والذاكرة ووحدات الإدخال والإخراج لتنفيذ الأوامر.</p>
    <div class="details">المستوى: مبتدئ | المدة: 6 أسابيع</div>
   <button onclick="location.href='register.php?course= تنظيم الحاسوب '">
سجل في هذه الدورة
</button>
</div>

<div class="card">
    <img src="images\8.jpeg" alt="التوجيه والتبديل">
    <h3> التوجيه والتبديل </h3>
    <p>تعلم أساسيات التوجيه والتبديل وفهم كيفية عمل الشبكات الداخلية وربط الأجهزة باستخدام السويتشات والراوترات.</p>
    <div class="details">المستوى: مبتدئ | المدة: 5 أسابيع</div>
<button onclick="location.href='register.php?course= التوجيه والتبديل '">
سجل في هذه الدورة
</button> </div>

</section>

<!-- Footer -->
<footer class="footer">
    <p>© 2026 Nexa Shield - جميع الحقوق محفوظة</p>
</footer>

<!-- Canvas Animation -->
<script>
function goToRegister(courses){
    window.location.href = "register.php?courses=" + encodeURIComponent(courses)
}
const canvas = document.getElementById("bg");
const ctx = canvas.getContext("2d");
function resizeCanvas(){canvas.width=window.innerWidth; canvas.height=window.innerHeight;}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);
const chars="01"; const fontSize=16; let columns=Math.floor(canvas.width/fontSize); let drops=Array(columns).fill(1);
function drawBinary(){
    ctx.fillStyle="rgba(15,23,42,0.35)";
    ctx.fillRect(0,0,canvas.width,canvas.height);
    ctx.font=fontSize+"px monospace";
    ctx.fillStyle="rgba(56,189,248,0.15)";
    for(let i=0;i<drops.length;i++){
        const text=chars[Math.floor(Math.random()*chars.length)];
        ctx.fillText(text,i*fontSize,drops[i]*fontSize);
        if(drops[i]*fontSize>canvas.height && Math.random()>0.98){drops[i]=0;}
        drops[i]++;
    }
    
}
setInterval(drawBinary,80);


</script>

</body>
</html>

