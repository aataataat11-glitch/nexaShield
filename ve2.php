<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>الوقاية الأمنية</title>

<style>
body {
    margin: 0;
    font-family: 'Cairo', sans-serif;
    background: #0f172a;
    color: #e5e7eb;
    line-height: 1.9;
}

header {
    background: #111827;
    padding: 20px 50px;
    border-bottom: 1px solid #1e293b;
}

header a {
    color: #38bdf8;
    text-decoration: none;
    font-size: 14px;
}

.container {
    padding: 50px 60px;
}

h1 {
    color: #38bdf8;
    margin-bottom: 20px;
}

canvas#bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}

.section {
    background: #020617;
    border: 1px solid #1e293b;
    border-radius: 18px;
    padding: 25px;
    margin-bottom: 25px;
    transition: 0.3s;
}

.section:hover {
    box-shadow: 0 10px 30px rgba(56,189,248,0.15);
}

.section h2 {
    color: #38bdf8;
    margin-bottom: 10px;
    font-size: 18px;
}

.section ul {
    padding-right: 20px;
}

.section li {
    margin-bottom: 8px;
    color: #cbd5f5;
}

footer {
    background: #020617;
    color: #94a3b8;
    text-align: center;
    padding: 18px;
    font-size: 14px;
}
</style>
</head>

<body>
<canvas id="bg"></canvas>

<header>
    <a href="vulnerabilities.php"> الرجوع إلى الخلف</a>
</header>

<div class="container">

    <h1> الوقاية الأمنية</h1>
    <p>
        الوقاية الأمنية هي خط الدفاع الأول لحماية الأنظمة والتطبيقات
        من الهجمات والثغرات قبل استغلالها.
    </p>

    <div class="section">
        <h2> أهداف الوقاية الأمنية</h2>
        <ul>
            <li>حماية بيانات المستخدمين</li>
            <li>منع الوصول غير المصرح به</li>
            <li>تقليل فرص الاختراق</li>
            <li>ضمان استمرارية الأنظمة</li>
        </ul>
    </div>

    <div class="section">
        <h2> تحديث الأنظمة والتطبيقات</h2>
        <ul>
            <li>تثبيت التحديثات الأمنية فور صدورها</li>
            <li>إزالة البرامج غير المستخدمة</li>
            <li>تحديث أنظمة التشغيل وقواعد البيانات</li>
        </ul>
    </div>

    <div class="section">
        <h2> حماية كلمات المرور</h2>
        <ul>
            <li>استخدام كلمات مرور قوية ومعقدة</li>
            <li>عدم إعادة استخدام كلمة المرور</li>
            <li>تفعيل المصادقة الثنائية (2FA)</li>
        </ul>
    </div>

    <div class="section">
        <h2> التحقق من المدخلات</h2>
        <ul>
            <li>منع إدخال الأكواد الخبيثة</li>
            <li>استخدام آليات التحقق (Validation)</li>
            <li>تعقيم المدخلات والمخرجات</li>
        </ul>
    </div>

    <div class="section">
        <h2> تأمين الاتصال</h2>
        <ul>
            <li>استخدام HTTPS</li>
            <li>تشفير البيانات أثناء النقل</li>
            <li>تجنب الشبكات العامة غير الآمنة</li>
        </ul>
    </div>

    <div class="section">
        <h2> إدارة الصلاحيات</h2>
        <ul>
            <li>إعطاء أقل صلاحية ممكنة للمستخدم</li>
            <li>فصل صلاحيات المستخدمين عن المدراء</li>
            <li>مراقبة الأنشطة المشبوهة</li>
        </ul>
    </div>

    <div class="section">
        <h2> خلاصة</h2>
        <p>
            الوقاية الأمنية ليست خيارًا، بل ضرورة.
            كل إجراء وقائي يساهم في تقليل المخاطر
            وحماية الأنظمة من الهجمات المستقبلية.
        </p>
    </div>

</div>

<footer>
    © 2026 Nexa Shield - جميع الحقوق محفوظة
</footer>

</body>
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

</html>
