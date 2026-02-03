<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>أساسيات الأمن السيبراني</title>
<style>
body { background:#0f172a; color:#e5e7eb; font-family:'Cairo', sans-serif; line-height:1.9; margin:0; }
.logo-bar { background:#111827; padding:10px 50px; display:flex; align-items:center; gap:15px; border-bottom:1px solid #0f172a; direction:ltr; }
.logo-img { width:40px; height:40px; border-radius:50%; border:2px solid #38bdf8; cursor:pointer; transition:0.3s; }
.logo-img:hover { transform:scale(1.1); }
.logo-text { font-size:22px; font-weight:bold; color:#38bdf8; }
.nav { display:flex; gap:22px; margin-left:auto; }
.nav a { color:#cbd5f5; text-decoration:none; font-size:15px; transition:0.3s; }
.nav a:hover { text-decoration: underline; color:#38bdf8; }
.content { padding:50px 60px; position: relative; z-index: 1; }
h1 { color:#38bdf8; }
.breadcrumb { padding: 10px 50px; background: #111827; font-size: 14px; color: #cbd5f5; }
.breadcrumb a { color: #38bdf8; text-decoration: none; margin-right: 5px; }
.breadcrumb a:hover { text-decoration: underline; }
ul { margin:20px 0; padding:0 20px; }
li { margin-bottom:10px; }
#logoModal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.85); justify-content:center; align-items:center; z-index:9999; }
#logoModal img { max-width:70%; max-height:70%; border-radius:20px; box-shadow:0 0 30px rgba(56,189,248,0.6); }
#closeLogoModal { position:absolute; top:20px; right:30px; font-size:40px; color:#ffffff; cursor:pointer; font-weight:bold; }
@media (max-width:768px) { .logo-bar { flex-direction:column; align-items:flex-start; gap:10px; } .nav { margin-left:0; flex-wrap:wrap; gap:15px; } }
</style>
</head>
<body>

<div class="breadcrumb">
  <a href="materials.html">المواد</a> / أساسيات الأمن السيبراني
</div>

<div class="logo-bar">
    <img src="images/img1.jpg" alt="شعار Nexa Shield" class="logo-img" id="logo">
    <span class="logo-text">Nexa Shield</span>
      <nav class="nav">
        <a href="about.php">Nexa Shield</a>
        <a href="tools.php">الادوات</a>
        <a href="vulnerabilities.php">الثغرات</a>
        <a href="courses.php">الدورات</a>
        <a href="materials.php">المواد</a>
        <a href="books.php">الكتب</a>
        <a href="index.php">الرئيسية</a>
        <a href="welcome.php">بداية الرحلة</a>
    </nav>
</div>

<div class="content">
    <h1>أساسيات الأمن السيبراني</h1>
    <ul>
        <li>مفهوم الأمن السيبراني: حماية الأجهزة والبيانات من الهجمات الرقمية.</li>
        <li>أنواع الهجمات السيبرانية: التصيد، البرامج الضارة، هجمات الحرمان من الخدمة.</li>
        <li>التهديدات والبرمجيات الخبيثة: فيروسات، تروجانات، رانسوموير.</li>
        <li>إجراءات الوقاية الأساسية: تحديث النظام، برامج الحماية، نسخ احتياطية.</li>
        <li>أهمية كلمات المرور وإدارة الحسابات: استخدام كلمات قوية وتغييرها دوريًا.</li>
    </ul>
</div>

<div id="logoModal">
  <span id="closeLogoModal">&times;</span>
  <img id="modalImg" src="">
</div>

<footer style="background:#020617; color:#94a3b8; padding:20px; text-align:center;">
    © 2025 Nexa Shield - جميع الحقوق محفوظة
</footer>

<script>
const logo = document.getElementById("logo");
const logoModal = document.getElementById("logoModal");
const modalImg = document.getElementById("modalImg");
const closeLogoModal = document.getElementById("closeLogoModal");
logo.addEventListener("click", () => {
    logoModal.style.display = "flex";
    modalImg.src = logo.src;
});
closeLogoModal.addEventListener("click", () => { logoModal.style.display = "none"; });
</script>

</body>
</html>
