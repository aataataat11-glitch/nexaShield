<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>التقرير الأمني الأسبوعي</title>

<style>
body {
    background:#0f172a;
    color:#e5e7eb;
    font-family:'Cairo', sans-serif;
    margin:0;
}

canvas#bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}
.top {
    background:#111827;
    padding:15px 40px;
    border-bottom:1px solid #1e293b;
}
.top a {
    color:#38bdf8;
    text-decoration:none;
    font-size:14px;
}
header {
    background:#111827;
    padding:30px;
    text-align:center;
    border-bottom:1px solid #1e293b;
}

header h1 {
    color:#38bdf8;
    margin:0;
}

header p {
    color:#cbd5f5;
    margin-top:10px;
}

.container {
    padding:40px 60px;
}

.card {
    background:#111827;
    border:1px solid #1e293b;
    border-radius:16px;
    padding:25px;
    margin-bottom:25px;
    box-shadow:0 0 25px rgba(56,189,248,0.05);
}

.card h2 {
    color:#38bdf8;
    margin-bottom:15px;
}

.card p, .card li {
    color:#cbd5f5;
    line-height:1.9;
}

.stats {
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
    gap:20px;
}

.stat-box {
    background:#020617;
    border:1px solid #1e293b;
    border-radius:14px;
    padding:20px;
    text-align:center;
    font-size:15px;
}

.stat-box span {
    display:block;
    font-size:26px;
    color:#38bdf8;
    margin-bottom:8px;
}

table {
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

table th {
    background:#020617;
    color:#38bdf8;
    padding:12px;
    border:1px solid #1e293b;
}

table td {
    padding:12px;
    border:1px solid #1e293b;
    color:#cbd5f5;
}

.status-done { color:#22c55e; }
.status-pending { color:#facc15; }

footer {
    background:#020617;
    color:#94a3b8;
    text-align:center;
    padding:18px;
    border-top:1px solid #1e293b;
}
</style>
</head>

<body>
<canvas id="bg"></canvas>

<div class="top">
    <a href="vulnerabilities.php"> الرجوع إلى الخلف</a>
</div>
<header>
    <h1> التقرير الأمني الشهري</h1>
    <p>ملخص شامل لأهم الأحداث والثغرات خلال شهر</p>
</header>

<div class="container">

    <div class="card">
        <h2> الملخص التنفيذي</h2>
        <p>
            خلال هذا الشهر تم رصد عدة محاولات هجومية،
            لم يتم تسجيل أي اختراق ناجح.
            مستوى التهديد العام: <strong style="color:#facc15;">متوسط</strong>.
        </p>
    </div>

    <div class="card">
        <h2> الإحصائيات</h2>
        <div class="stats">
            <div class="stat-box">
                <span>12</span>
                محاولات هجومية
            </div>
            <div class="stat-box">
                <span>3</span>
                ثغرات مكتشفة
            </div>
            <div class="stat-box">
                <span>7</span>
                محاولات دخول فاشلة
            </div>
            <div class="stat-box">
                <span>2</span>
                ثغرات مغلقة
            </div>
        </div>
    </div>

    <div class="card">
        <h2> الثغرات المكتشفة</h2>
        <table>
            <tr>
                <th>اسم الثغرة</th>
                <th>النوع</th>
                <th>الخطورة</th>
                <th>الحالة</th>
            </tr>
            <tr>
                <td>القوة الغاشمة</td>
                <td>Authentication</td>
                <td style="color:#ef4444;">عالية</td>
                <td class="status-done">تمت المعالجة</td>
            </tr>
            <tr>
                <td>الرجل في المنتصف</td>
                <td>Network</td>
                <td style="color:#facc15;">متوسطة</td>
                <td class="status-pending">قيد المراجعة</td>
            </tr>
        </table>
    </div>

    <div class="card">
        <h2> إجراءات الوقاية</h2>
        <ul>
            <li>تفعيل المصادقة الثنائية</li>
            <li>تحديث الأنظمة والخوادم</li>
            <li>مراقبة حركة الشبكة</li>
            <li>حظر محاولات الدخول المتكررة</li>
        </ul>
    </div>

    <div class="card">
        <h2> توصيات الشهر القادم</h2>
        <ul>
            <li>اختبار اختراق داخلي</li>
            <li>رفع مستوى التشفير</li>
            <li>تدريب الموظفين على الهندسة الاجتماعية</li>
        </ul>
    </div>

</div>

<footer>
    © 2026 Nexa Shield – التقرير الأمني الشهري
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

