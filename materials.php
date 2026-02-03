<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>المواد</title>
<style>
 canvas#bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}
body { background:#0f172a; color:#e5e7eb; font-family:'Cairo', sans-serif; line-height:1.9; margin:0; }
.logo-bar { background:#111827; padding:10px 50px; display:flex; align-items:center; gap:15px; border-bottom:1px solid #0f172a; direction:ltr; }
.logo-img { width:40px; height:40px; border-radius:50%; border:2px solid #38bdf8; cursor:pointer; transition:0.3s; }
.logo-img:hover { transform:scale(1.1); }
.logo-text { font-size:22px; font-weight:bold; color:#38bdf8; }
.nav { display:flex; gap:22px; margin-left:auto; }
.nav a { color:#cbd5f5; text-decoration:none; font-size:15px; transition:0.3s; }
.nav a:hover { text-decoration: underline; color:#38bdf8; }
.content { padding:50px 60px; position: relative; z-index: 1; }
.breadcrumb { padding: 10px 50px; background: #111827; font-size: 14px; color: #cbd5f5; }
.breadcrumb a { color: #38bdf8; text-decoration: none; margin-right: 5px; }
.breadcrumb a:hover { text-decoration: underline; }
.materials-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; padding: 20px; }
.material-box { background: #111827; border: 2px solid #38bdf8; border-radius: 12px; padding: 20px; text-align: center; cursor: pointer; color: #38bdf8; font-weight: bold; transition: 0.3s; text-decoration:none; display:flex; align-items:center; justify-content:center; height:100px; }
.material-box:hover { transform: scale(1.05); background: #1e293b; }
#logoModal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.85); justify-content:center; align-items:center; z-index:9999; }
#logoModal img { max-width:70%; max-height:70%; border-radius:20px; box-shadow:0 0 30px rgba(56,189,248,0.6); }
#closeLogoModal { position:absolute; top:20px; right:30px; font-size:40px; color:#ffffff; cursor:pointer; font-weight:bold; }
@media (max-width:768px) { .logo-bar { flex-direction:column; align-items:flex-start; gap:10px; } .nav { margin-left:0; flex-wrap:wrap; gap:15px; } }


/* تأكيد أن المحتوى فوق الخلفية */
body > *:not(#bg) {
    position: relative;
    z-index: 1;
}

</style>
</head>
<body>
<canvas id="bg"></canvas>

<!-- شريط الشعار -->
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

<div class="content">
    <h1>المواد الجامعية</h1>
    <div class="materials-grid">
        <a href="network-def.php" class="material-box">الشبكات</a>
        <a href="computer-org.php" class="material-box">تنظيم الحاسوب</a>
        <a href="cybersecurity-bas.php" class="material-box">أساسيات الأمن السيبراني</a>
        <a href="encryption.php" class="material-box">التشفير</a>
        <a href="OS.php" class="material-box">نظم التشغيل</a>
        <a href="programming.php" class="material-box">البرمجة</a>
        <a href="Data Structures.php" class="material-box">هياكل البيانات والخوازميات</a>
        <a href="Ro & Sw.php" class="material-box">التوجيه والتبديل</a>
        <a href="Systems Analysis.php" class="material-box">تحليل وتصميم نظم</a>
        <a href="discrete-structures.php" class="material-box">الهياكل المتقطعة</a>
        <a href="cloud-computing.php" class="material-box">الحوسبة السحابية</a>
        <a href="ethical-hacking.php" class="material-box">الهاكر الأخلاقي</a>


        
    </div>
</div>

<div id="logoModal">
  <span id="closeLogoModal">&times;</span>
  <img id="modalImg" src="">
</div>

<footer style="background:#020617; color:#94a3b8; padding:20px; text-align:center;">
    © 2026 Nexa Shield - جميع الحقوق محفوظة
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


