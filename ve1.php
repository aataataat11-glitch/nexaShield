<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>SQL Injection</title>
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
.content {
    padding:50px 60px;
}
.box {
    background:#020617;
    border:1px solid #1e293b;
    border-radius:16px;
    padding:25px;
    margin-bottom:20px;
}
h1 { color:#38bdf8; }

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

<div class="top">
    <a href="vulnerabilities.php"> الرجوع إلى الخلف</a>
</div>

<div class="content">
    <h1>SQL Injection</h1>

    <div class="box">
        <h3> الوصف</h3>
        <p>
            ثغرة تسمح بحقن أوامر SQL داخل قواعد البيانات
            مما قد يؤدي إلى تسريب أو تعديل البيانات.
        </p>
    </div>

    <div class="box">
        <h3> التأثير</h3>
        <p>
            فقدان البيانات، اختراق الحسابات،
            أو السيطرة على النظام.
        </p>
    </div>

    <div class="box">
        <h3> الوقاية</h3>
        <p>
            استخدام Prepared Statements،
            التحقق من المدخلات،
            وتحديد الصلاحيات.
        </p>
    </div>
</div>

<div class="content">
    <h1> Broken Authentication</h1>

    <div class="box">
        <h3> الوصف</h3>
        <p>
تحدث عند وجود ضعف في آليات المصادقة وإدارة الجلسات. 
        </p>
    </div>

    <div class="box">
        <h3> التأثير</h3>
        <p>
              اختراق الحسابات وانتحال هوية المستخدمين
        </p>
    </div>

    <div class="box">
        <h3> الوقاية</h3>
        <p>
استخدام تشفير قوي لكلمات المرور,
تفعيل المصادقة الثنائية (2FA),
تحديد عدد محاولات تسجيل الدخول.       
 </p>
    </div>
</div>

<div class="content">
    <h1> Insecure File Upload</h1>

    <div class="box">
        <h3> الوصف</h3>
        <p>
           تحدث عند السماح برفع ملفات دون التحقق من نوعها أو محتواها، مما قد يسمح برفع ملفات خبيثة.
        </p>
    </div>

    <div class="box">
        <h3> التأثير</h3>
        <p>
تنفيذ أوامر على الخادم واختراق النظام بالكامل       
        </p> 
    </div>

    <div class="box">
        <h3> الوقاية</h3>
        <p>
التحقق من نوع وحجم الملفات,
تغيير اسم الملف بعد الرفع,
منع تنفيذ الملفات المرفوعة.   
     </p>
    </div>
</div>

<div class="content">
    <h1>Man-in-the-Middle (MITM)</h1>

    <div class="box">
        <h3> الوصف</h3>
        <p>
           هجوم يتم فيه اعتراض الاتصال بين طرفين (مثل المستخدم والموقع) دون علمهما، 
           حيث يقوم المهاجم بالتجسس أو تعديل البيانات المتبادلة.
        </p>
    </div>

    <div class="box">
        <h3> التأثير</h3>
        <p>
               سرقة كلمات المرور,
              التجسس على البيانات الحساسة,
              التلاعب بالمعلومات المرسلة.
       </p>
    </div>

    <div class="box">
        <h3> الوقاية</h3>
        <p>
           استخدام HTTPS وتشفير الاتصالات,
         تجنب شبكات Wi-Fi العامة غير الآمنة,
               استخدام VPN.
        </p>
    </div>
</div>

<div class="content">
    <h1>MAC Spoofing</h1>

    <div class="box">
        <h3> الوصف</h3>
        <p>
           هجوم يقوم فيه المهاجم بتغيير عنوان MAC الخاص بجهازه لانتحال هوية جهاز آخر على الشبكة.
        </p>
    </div>

    <div class="box">
        <h3> التأثير</h3>
        <p>
          تجاوز أنظمة التحكم في الشبكة,
           الوصول غير المصرح به,
           التنصت على حركة البيانات.
        </p>
    </div>

    <div class="box">
        <h3> الوقاية</h3>
        <p>
           تفعيل MAC Address Filtering,
           مراقبة الشبكة باستمرار,
         استخدام أنظمة كشف التسلل (IDS).
        </p>
    </div>
</div>

<div class="content">
    <h1>Brute Force Attack</h1>

    <div class="box">
        <h3> الوصف</h3>
        <p>
           هجوم يعتمد على تجربة عدد كبير من كلمات المرور أو مفاتيح التشفير حتى يتم الوصول إلى الصحيحة.
        </p>
    </div>

    <div class="box">
        <h3> التأثير</h3>
        <p>
             اختراق الحسابات والوصول للبيانات الحساسة    
        </p>
    </div>

    <div class="box">
        <h3> الوقاية</h3>
        <p>
          تحديد عدد محاولات تسجيل الدخول,
          استخدام كلمات مرور قوية,
          تفعيل المصادقة الثنائية (2FA).
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
