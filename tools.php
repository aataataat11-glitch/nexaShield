<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>أدوات الأمن السيبراني</title>
<style>
    canvas#bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}

* {margin:0; padding:0; box-sizing:border-box; font-family:'Cairo',sans-serif;}
body {background:#0f172a; color:#e5e7eb; line-height:1.8;}
.logo-bar {display:flex; align-items:center; gap:15px; padding:10px 50px; background:#111827; border-bottom:1px solid #0f172a; direction:ltr;}
.logo-img {width:40px; height:40px; border-radius:50%; border:2px solid #38bdf8; cursor:pointer; transition:0.3s;}
.logo-img:hover {transform:scale(1.1);}
.logo-text {font-size:20px; font-weight:bold; color:#4cbdee;}
.nav {display:flex; gap:22px; margin-left:auto;}
.nav a {color:#cbd5f5; text-decoration:none; font-size:15px; transition:0.3s;}
.nav a:hover {color:#38bdf8;}
.hero {text-align:center; padding:60px 20px;}
.hero h1 {font-size:36px; background:linear-gradient(to left,#38bdf8,#22c55e); -webkit-background-clip:text; -webkit-text-fill-color:transparent; margin-bottom:20px;}
.hero p {color:#94a3b8; font-size:18px; max-width:600px; margin:auto; margin-bottom:35px;}
.cards {display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:25px; padding:10px 60px;}
.card {display:flex; flex-direction:column; justify-content:flex-start; align-items:center; padding:25px; border-radius:14px; text-align:center; background:linear-gradient(180deg,#111827,#020617); border:1px solid #0f172a; color:#e5e7eb; text-decoration:none; transition:0.4s; height:100%;}
.card:hover {transform:translateY(-8px); border-color:#38bdf8; box-shadow:0 0 20px rgba(56,189,248,0.3);}
.card img {width:100%; height:150px; object-fit:cover; border-radius:10px; margin-bottom:15px;}
.card h3 {margin-bottom:8px; font-size:20px; background:linear-gradient(to left,#38bdf8,#22c55e); -webkit-background-clip:text; -webkit-text-fill-color:transparent;}
.card p {color:#94a3b8; font-size:14px; margin-bottom:10px; min-height:45px;}
.card .details {font-size:13px; color:#a1a1aa; margin-bottom:15px; margin-top:auto;}
.card button {padding:8px 15px; border:none; border-radius:8px; background:#38bdf8; color:#fff; font-size:14px; cursor:pointer; transition:0.3s;}
.card button:hover {background:#22c55e;}
.footer {background:#020617; text-align:center; padding:18px; margin-top:50px; font-size:14px; color:#94a3b8; border-top:1px solid #0f172a;}
@media (max-width:768px) { .logo-bar {flex-direction:column; align-items:flex-start; gap:10px; } .nav {margin-left:0; flex-wrap:wrap; gap:15px;} .hero h1 {font-size:28px;} .cards {padding:30px 20px;} }
</style>
</head>
<body>
   
<div class="breadcrumb" id="breadcrumb"></div>
<canvas id="bg"></canvas>

<!-- Logo Bar -->
<div class="logo-bar">
    <img src="images/img1.jpg" alt="شعار Nexa Shield" class="logo-img">
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
    <h1>أشهر أدوات الأمن السيبراني</h1>
    <p>تعرف على أهم الأدوات المستخدمة في الاختبار الأمني وتحليل الشبكات وحماية الأنظمة.</p>
</section>

<!-- Tools Cards -->
<section class="cards">

    <div class="card">
        <img src="images/nmap.jpg" alt="Nmap">
        <h3> Nmap</h3>
        <p>أداة قوية لمسح الشبكات والكشف عن الأجهزة والخدمات المفتوحة.</p>
    </div>

    <div class="card">
        <img src="images/wiresh.jpg" alt="Wireshark">
        <h3> Wireshark</h3>
        <p>محلل حزم الشبكة لمراقبة حركة البيانات وتحليل البروتوكولات.</p>
    </div>

    <div class="card">
        <img src="images/meta.png" alt="Metasploit">
        <h3> Metasploit</h3>
        <p>إطار عمل لاختبار الاختراق يستخدم لاكتشاف واستغلال الثغرات الأمنية.</p>
    </div>

    <div class="card">
        <img src="images/burp.png" alt="Burp Suite">
        <h3> Burp Suite</h3>
        <p>أداة لفحص تطبيقات الويب واختبار الأمان واكتشاف الثغرات البرمجية.</p>
    </div>
<div class="card">
    <img src="images/nikto.jpg" alt="Nikto">
    <h3> Nikto</h3>
    <p>أداة لفحص خوادم الويب واكتشاف الثغرات والإعدادات الخاطئة.</p>
</div>

<div class="card">
    <img src="images/sqlmap.jpg" alt="SQLmap">
    <h3> SQLmap</h3>
    <p>أداة آلية لاكتشاف واستغلال ثغرات SQL Injection في تطبيقات الويب.</p>
</div>

<div class="card">
    <img src="images/air.jpg" alt="Aircrack-ng">
    <h3> Aircrack-ng</h3>
    <p>مجموعة أدوات لاختبار أمان الشبكات اللاسلكية وكلمات المرور.</p>
</div>

<div class="card">
    <img src="images/hydra.jpg" alt="Hydra">
    <h3> Hydra</h3>
    <p>أداة قوية لتنفيذ هجمات التخمين على بروتوكولات متعددة.</p>
</div>

<div class="card">
    <img src="images/john.png" alt="John the Ripper">
    <h3> John the Ripper</h3>
    <p>أداة متقدمة لكسر كلمات المرور واختبار قوة التشفير.</p>
</div>

<div class="card">
    <img src="images/nessus.png" alt="Nessus">
    <h3> Nessus</h3>
    <p>أداة فحص ثغرات تساعد في تقييم أمان الأنظمة والشبكات.</p>
</div>

<div class="card">
    <img src="images/Snort.jpg" alt="Snort">
    <h3> Snort</h3>
    <p>نظام كشف التسلل لمراقبة حركة الشبكة واكتشاف الهجمات.</p>
</div>

<div class="card">
    <img src="images/OSINT.jpg" alt="OSINT Tools">
    <h3> OSINT Tools</h3>
    <p>أدوات جمع المعلومات من المصادر المفتوحة لأغراض تحليلية وأمنية.</p>
</div>

<div class="card">
    <img src="images/shodan.jpg" alt="Shodan">
    <h3> Shodan</h3>
    <p>محرك بحث للعثور على الأجهزة المتصلة بالإنترنت وتحليل مخاطرها.</p>
</div>

<div class="card">
    <img src="images\Hashcat.jpg" alt="Hashcat">
    <h3> Hashcat</h3>
    <p>أداة عالية الأداء لاختبار وكسر الهاشات باستخدام المعالج والـ GPU.</p>
</div>

<div class="card">
    <img src="images/OpenVAS.jpg" alt="OpenVAS">
    <h3> OpenVAS</h3>
    <p>منصة مفتوحة المصدر لفحص الثغرات وتقييم المخاطر الأمنية.</p>
</div>

<div class="card">
    <img src="images/tcpdump.jpg" alt="tcpdump">
    <h3> tcpdump</h3>
    <p>أداة سطر أوامر لمراقبة وتحليل حركة الشبكة بشكل مباشر.</p>
</div>

</section>

<!-- Footer -->
<footer class="footer">
    <p>© 2026 Nexa Shield - جميع الحقوق محفوظة</p>
</footer>

</body>
<script>
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
</html>
