<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>هياكل البيانات</title>
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

/* Breadcrumb */
.breadcrumb { padding: 10px 50px; background: #111827; font-size: 14px; color: #cbd5f5; }
.breadcrumb a { color: #38bdf8; text-decoration: none; margin-right: 5px; }
.breadcrumb a:hover { text-decoration: underline; }

/* محتوى المواد */
ul { margin:20px 0; padding:0 20px; }
li { margin-bottom:10px; }

/* مودال الشعار */
#logoModal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.85); justify-content:center; align-items:center; z-index:9999; }
#logoModal img { max-width:70%; max-height:70%; border-radius:20px; box-shadow:0 0 30px rgba(56,189,248,0.6); }
#closeLogoModal { position:absolute; top:20px; right:30px; font-size:40px; color:#ffffff; cursor:pointer; font-weight:bold; }

@media (max-width:768px) {
  .logo-bar { flex-direction:column; align-items:flex-start; gap:10px; }
  .nav { margin-left:0; flex-wrap:wrap; gap:15px; }
}
</style>
</head>
<body>

<!-- شريط التتبع -->
<div class="breadcrumb">
  <a href="materials.html">المواد</a> / هياكل البيانات
</div>

<!-- شريط الشعار -->
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

<!-- محتوى هياكل البيانات -->
<div class="content">
    <h1>هياكل البيانات</h1>
    <p>هياكل البيانات هي طرق تنظيم وتخزين البيانات بطريقة تسمح بالوصول إليها وإدارتها بكفاءة.</p>

    <h2>أنواع هياكل البيانات</h2>
    <ul>
        <li><strong>المصفوفات (Arrays):</strong> تخزين عناصر متشابهة في موقع متتالي.</li>
        <li><strong>القوائم المرتبطة (Linked Lists):</strong> سلسلة من العقد التي تشير إلى العقدة التالية.</li>
        <li><strong>الأكوام (Stacks):</strong> ترتيب بيانات بطريقة LIFO (آخر ما يدخل هو أول من يخرج).</li>
        <li><strong>الطوابير (Queues):</strong> ترتيب بيانات بطريقة FIFO (أول ما يدخل هو أول من يخرج).</li>
        <li><strong>الأشجار (Trees):</strong> هيكل بيانات هرمي يبدأ من جذر وينتقل إلى فروع.</li>
        <li><strong>الرسوم البيانية (Graphs):</strong> مجموعة من العقد متصلة بواسطة حواف.</li>
    </ul>

    <h2>العمليات الأساسية</h2>
    <ul>
        <li>الإضافة (Insertion)</li>
        <li>الحذف (Deletion)</li>
        <li>البحث (Search)</li>
        <li>الترتيب (Sorting)</li>
    </ul>

    <h2>تطبيقات هياكل البيانات</h2>
    <ul>
        <li>إدارة قواعد البيانات</li>
        <li>أنظمة التشغيل</li>
        <li>تطبيقات الإنترنت والذكاء الاصطناعي</li>
    </ul>
</div>

<!-- مودال الشعار -->
<div id="logoModal">
  <span id="closeLogoModal">&times;</span>
  <img id="modalImg" src="">
</div>

<footer style="background:#020617; color:#94a3b8; padding:20px; text-align:center;">
    © 2025 Nexa Shield - جميع الحقوق محفوظة
</footer>

<script>
// مودال الشعار
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
