<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>الثغرات</title>

<style>
/* ===== أساسيات ===== */
body {
    background:#0f172a;
    color:#e5e7eb;
    font-family:'Cairo', sans-serif;
    line-height:1.9;
    margin:0;
}

canvas#bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}

/* ===== Navbar ===== */
.logo-bar {
    background:#111827;
    padding:10px 50px;
    display:flex;
    align-items:center;
    gap:15px;
    border-bottom:1px solid #0f172a;
    direction:ltr;
}
.logo-img {
    width:40px;
    height:40px;
    border-radius:50%;
    border:2px solid #38bdf8;
    cursor:pointer;
    transition:0.3s;
}
.logo-img:hover { transform:scale(1.1); }
.logo-text { font-size:22px; font-weight:bold; color:#38bdf8; }
.nav { display:flex; gap:22px; margin-left:auto; }
.nav a {
    color:#cbd5f5;
    text-decoration:none;
    font-size:15px;
    transition:0.3s;
}
.nav a:hover { color:#38bdf8; }

/* ===== المحتوى ===== */
.content { padding:50px 60px; }
h1 { color:#38bdf8; }
p { color:#cbd5f5; }

/* ===== Cards ===== */
.cards-container {
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(280px,1fr));
    gap:25px;
    margin-top:40px;
}

.card {
    background:linear-gradient(145deg,#020617,#111827);
    border:1px solid #1e293b;
    border-radius:18px;
    padding:25px;
    cursor:pointer;
    transition:0.4s;
    position:relative;
}

.card:hover {
    transform:translateY(-8px);
    box-shadow:0 15px 40px rgba(56,189,248,0.2);
}

.card span {
    font-size:12px;
    color:#94a3b8;
}

.card h3 {
    color:#38bdf8;
    margin:10px 0;
}

.card p {
    font-size:14px;
}

/* ===== Footer ===== */
footer {
    background:#020617;
    color:#94a3b8;
    padding:18px;
    text-align:center;
}

/* ===== Responsive ===== */
@media (max-width:768px){
    .logo-bar { flex-direction:column; align-items:flex-start; }
    .nav { flex-wrap:wrap; }
}
</style>
</head>

<body>

<canvas id="bg"></canvas>

<!-- Navbar -->
<div class="logo-bar">
    <img src="images/img1.jpg" class="logo-img" id="logo">
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

<!-- Content -->
<div class="content">
    <h1>الثغرات الأمنية</h1>
    <p>آخر الأخبار عن الثغرات، تحليل أثرها، وإرشادات للوقاية.</p>

    <div class="cards-container">

        <div class="card" onclick="location.href='ve1.php'">
            <span> الثغرات الحرجة</span>
            <h3>اشهر الثغرات </h3>
            <p>
                ثغرة تسمح بحقن أوامر SQL
                قد تؤدي لتسريب أو حذف البيانات.
            </p>
        </div>

        <div class="card" onclick="location.href='ve2.php'">
            <span> حماية</span>
            <h3>طرق الوقاية</h3>
            <p>
                أفضل الممارسات
                لتأمين تطبيقات الويب.
            </p>
        </div>

        <div class="card" onclick="location.href='ve3.php'">
            <span> تقرير</span>
            <h3>تقرير شهري</h3>
            <p>
                ملخص أخطر الثغرات
                المكتشفة هذا الشهر.
            </p>
        </div>

    </div>
</div>

<footer>
    © 2026 Nexa Shield - جميع الحقوق محفوظة
</footer>

<!-- ===== Background Animation ===== -->
<script>
const canvas = document.getElementById("bg");
const ctx = canvas.getContext("2d");

function resize(){
    canvas.width = innerWidth;
    canvas.height = innerHeight;
}
resize();
addEventListener("resize", resize);

const chars="01";
const fontSize=16;
let columns=Math.floor(canvas.width/fontSize);
let drops=Array(columns).fill(1);

function draw(){
    ctx.fillStyle="rgba(15,23,42,0.35)";
    ctx.fillRect(0,0,canvas.width,canvas.height);
    ctx.font=fontSize+"px monospace";
    ctx.fillStyle="rgba(56,189,248,0.15)";
    for(let i=0;i<drops.length;i++){
        const text=chars[Math.floor(Math.random()*2)];
        ctx.fillText(text,i*fontSize,drops[i]*fontSize);
        if(drops[i]*fontSize>canvas.height && Math.random()>0.98) drops[i]=0;
        drops[i]++;
    }
}
setInterval(draw,80);
</script>

</body>
</html>






























